<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

/**
 * Generate php abstract Record class from lexicon json.
 *
 * ```
 * php artisan bluesky:lexicon-record
 * ```
 *
 * update lexicon
 * ```
 * git submodule update --remote
 * ```
 */
class LexiconRecordCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bluesky:lexicon-record';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate php abstract Record class from lexicon json';

    protected string $php_path;

    protected string $json_path;

    protected array $files;

    protected Collection $jsons;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->php_path = realpath(__DIR__.'/../../../../src/Record/');
        $this->json_path = realpath(__DIR__.'/../../../../atproto/lexicons/');

        File::cleanDirectory($this->php_path);

        $this->files = File::allFiles($this->json_path);

        $this->record();

        return 0;
    }

    protected function record(): void
    {
        $this->jsons = collect($this->files)
            ->filter(fn (string $file) => Str::endsWith($file, '.json'))
            ->mapWithKeys(function (string $file) {
                $json = File::json($file);

                return [Arr::get($json, 'id') => $json];
            });

        $this->jsons
            ->map(function (array $json) {
                $type = Arr::get($json, 'defs.main.type');
                if ($type === 'record') {
                    return $json;
                }
            })
            ->filter(fn ($json) => is_array($json))
            //->dump()
            ->each(function (array $json, string $id) {
                $property = $this->getProperties($json, $id);
                $this->save(json: $json, id: $id, property: Str::rtrim($property));
            });
    }

    protected function getProperties(array $json, string $id): string
    {
        $required = Arr::get($json, 'defs.main.record.required', []);
        $properties = Arr::get($json, 'defs.main.record.properties');

        return collect($properties)
            //->dump()
            ->map(function (array $property, string $name) use ($required, $id) {
                $type = Arr::get($property, 'type');
                $format = Arr::get($property, 'format');
                $knownValues = Arr::get($property, 'knownValues');

                $ref = null;
                if ($type === 'ref') {
                    $ref = Arr::get($property, 'ref');
                    if (Str::doesntContain($ref, '.')) {
                        $ref = $id.$ref;
                    }
                    $ref_id = Str::before($ref, '#');
                    $ref_item = Str::of($ref)->remove($ref_id)->after('#')->toString();
                    if (empty($ref_item)) {
                        $ref_item = 'main';
                    }
                    $ref_type = $ref_id.'.defs.'.$ref_item.'.type';
                    $type = $this->jsons->dot()->get($ref_type);
                }

                $union = null;
                if ($type === 'union') {
                    $union = Arr::get($property, 'refs');
                    if (! is_array($union)) {
                        $union = null;
                    }
                }

                if ($type === 'array' && empty($union)) {
                    if (Arr::get($property, 'items.type') === 'union') {
                        $union = Arr::get($property, 'items.refs');
                        if (! is_array($union)) {
                            $union = null;
                        }
                        $union = collect($union)->map(function ($ref) use ($id) {
                            if (Str::doesntContain($ref, '.')) {
                                $ref = $id.$ref;
                            }
                            return $ref;
                        })->toArray();
                    }
                }

                $blob = null;
                if ($type === 'blob') {
                    $accept = Arr::get($property, 'accept');
                    $maxSize = Arr::get($property, 'maxSize', 0);

                    if (is_array($accept)) {
                        $blob = [
                            'accept' => $accept,
                            'maxSize' => $maxSize,
                        ];
                    }
                }

                $type = match ($type) {
                    'integer' => 'int',
                    'boolean' => 'bool',
                    'string' => 'string',
                    'unknown' => 'mixed',
                    'array', 'object', 'union', 'blob' => 'array',
                    default => '',
                };

                $description = Arr::get($property, 'description');
                $require = in_array($name, $required, true);

                return compact('type', 'format', 'knownValues', 'ref', 'union', 'blob', 'description', 'require');
            })
            //->dump()
            ->implode(function ($property, $name) {
                $type = Arr::get($property, 'type');
                $format = Arr::get($property, 'format');
                $ref = Arr::get($property, 'ref');
                $union = Arr::get($property, 'union');
                $knownValues = Arr::get($property, 'knownValues');
                $blob = Arr::get($property, 'blob');
                $require = Arr::get($property, 'require');
                $description = Arr::get($property, 'description');
                $default = '';

                if (! $require) {
                    if (filled($type)) {
                        $type = '?'.$type;
                    }
                    $default = '= null';
                }

                if (filled($description)) {
                    $properties = [
                        '    /**',
                        '     * '.Str::rtrim($description, '.').'.',
                        '     */',
                    ];
                } else {
                    $properties = [];
                }

                if (filled($ref)) {
                    $ref = "    #[Ref('$ref')]";
                }

                if (filled($union)) {
                    $union = collect($union)->implode(fn ($item) => "'$item'", ', ');
                    $union = sprintf('    #[Union([%s])]', $union);
                }

                if (filled($knownValues)) {
                    $knownValues = collect($knownValues)->implode(fn ($item) => "'$item'", ', ');
                    $knownValues = sprintf('    #[KnownValues([%s])]', $knownValues);
                }

                if (filled($blob)) {
                    $accept = collect(data_get($blob, 'accept'))->implode(fn ($item) => "'$item'", ', ');
                    $blob = sprintf('    #[Blob(accept: [%s], maxSize: %s)]', $accept, data_get($blob, 'maxSize', 0));
                }

                if (filled($format)) {
                    $format = "    #[Format('$format')]";
                }

                return collect($properties)
                    ->when(filled($ref), fn ($collection) => $collection->add($ref))
                    ->when(filled($format), fn ($collection) => $collection->add($format))
                    ->when(filled($union), fn ($collection) => $collection->add($union))
                    ->when(filled($knownValues), fn ($collection) => $collection->add($knownValues))
                    ->when(filled($blob), fn ($collection) => $collection->add($blob))
                    ->merge([
                        '    '.Str::squish("protected $type \$$name $default").';'.PHP_EOL.PHP_EOL,
                    ])->implode(PHP_EOL);
            });
    }

    protected function save(array $json, string $id, string $property): void
    {
        // ["App", "Bsky, "Actor", "Profile]
        $path = Str::of($id)->explode('.')->map(fn ($item) => Str::studly($item));

        // "AbstractProfile"
        $name = 'Abstract'.$path->last();
        // "App/Bsky/Actor/AbstractProfile"
        $file_path = $path->take(3)->implode('/').'/'.$name;
        // "App\Bsky\Actor"
        $namespace = $path->take(3)->implode('\\');

        $description = Arr::get($json, 'defs.main.description') ?? '';

        if (filled($description)) {
            $description = collect([
                '/**',
                ' * '.Str::rtrim($description, '.').'.',
                ' */',
            ])->implode(PHP_EOL);
        }

        $const = "    public const NSID = '$id';";

        $required = Arr::get($json, 'defs.main.record.required', []);
        $required = collect($required)
            ->implode(function ($item) {
                return "'$item'";
            }, ', ');
        $required = "#[Required([$required])]";

        $tmp = File::get(realpath(__DIR__.'/stubs/lexicon-record.stub'));

        $tmp = Str::of($tmp)
            ->replace('{namespace}', $namespace)
            ->replace('{description}', $description)
            ->replace('{name}', $name)
            ->replace('{const}', $const)
            ->replace('{required}', $required)
            ->replace('{property}', $property)
            ->toString();

        $tmp = $this->removeAttr($tmp);

        $file_path = $this->php_path."/$file_path.php";
        File::ensureDirectoryExists(dirname($file_path));
        File::put($file_path, $tmp);

        $this->info($file_path);
    }

    protected function removeAttr(string $str): string
    {
        return Str::of($str)
            ->whenContains('#[Ref',
                fn (Stringable $string) => $string,
                fn (Stringable $string) => $string->remove('use Revolution\AtProto\Lexicon\Attributes\Ref;'.PHP_EOL),
            )
            ->whenContains('#[Union',
                fn (Stringable $string) => $string,
                fn (Stringable $string) => $string->remove('use Revolution\AtProto\Lexicon\Attributes\Union;'.PHP_EOL),
            )
            ->whenContains('#[Format',
                fn (Stringable $string) => $string,
                fn (Stringable $string) => $string->remove('use Revolution\AtProto\Lexicon\Attributes\Format;'.PHP_EOL),
            )
            ->whenContains('#[Blob',
                fn (Stringable $string) => $string,
                fn (Stringable $string) => $string->remove('use Revolution\AtProto\Lexicon\Attributes\Blob;'.PHP_EOL),
            )
            ->whenContains('#[KnownValues',
                fn (Stringable $string) => $string,
                fn (Stringable $string) => $string->remove('use Revolution\AtProto\Lexicon\Attributes\KnownValues;'.PHP_EOL),
            )
            ->toString();
    }
}
