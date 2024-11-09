<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
                $description = Arr::get($json, 'defs.main.description') ?? '';
                $this->save(Str::rtrim($property), $description, $id);
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

                $type = match ($type) {
                    'integer' => 'int',
                    'boolean' => 'bool',
                    'string', 'blob' => 'string',
                    'unknown' => 'mixed',
                    'array', 'object', 'union' => 'array',
                    default => '',
                };

                $description = Arr::get($property, 'description');
                $require = in_array($name, $required, true);

                return compact('type', 'ref', 'description', 'require');
            })
            //->dump()
            ->implode(function ($property, $name) {
                $type = Arr::get($property, 'type');
                $ref = Arr::get($property, 'ref');
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

                return collect($properties)
                    ->when(filled($ref), fn ($collection) => $collection->add($ref))
                    ->merge([
                        '    '.Str::trim("protected $type \$$name $default").';'.PHP_EOL.PHP_EOL,
                    ])->implode(PHP_EOL);
            });
    }

    protected function save(string $property, string $description, string $id): void
    {
        // ["App", "Bsky, "Actor", "Profile]
        $path = Str::of($id)->explode('.')->map(fn ($item) => Str::studly($item));

        // "AbstractProfile"
        $name = 'Abstract'.$path->last();
        // "App/Bsky/Actor/AbstractProfile"
        $file_path = $path->take(3)->implode('/').'/'.$name;
        // "App\Bsky\Actor"
        $namespace = $path->take(3)->implode('\\');

        if (filled($description)) {
            $description = collect([
                '/**',
                ' * '.Str::rtrim($description, '.').'.',
                ' */',
            ])->implode(PHP_EOL);
        }

        $const = "    public const NSID = '$id';";

        $tmp = File::get(realpath(__DIR__.'/stubs/lexicon-record.stub'));

        $tmp = Str::of($tmp)
            ->replace('{namespace}', $namespace)
            ->replace('{description}', $description)
            ->replace('{name}', $name)
            ->replace('{const}', $const)
            ->replace('{property}', $property)
            ->toString();

        $file_path = $this->php_path."/$file_path.php";
        File::ensureDirectoryExists(dirname($file_path));
        File::put($file_path, $tmp);

        $this->info($file_path);
    }
}
