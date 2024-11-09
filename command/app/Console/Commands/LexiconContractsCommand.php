<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RuntimeException;

/**
 * Generate php interface from lexicon json.
 *
 * ```
 * php artisan bluesky:lexicon-contracts
 * ```
 *
 * update lexicon
 * ```
 * git submodule update --remote
 * ```
 */
class LexiconContractsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bluesky:lexicon-contracts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate php interface from lexicon json';

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
        $this->php_path = realpath(__DIR__.'/../../../../src/Contracts/');
        $this->json_path = realpath(__DIR__.'/../../../../atproto/lexicons/');

        File::cleanDirectory($this->php_path);

        $this->files = File::allFiles($this->json_path);

        $this->generate();

        return 0;
    }

    protected function generate(): void
    {
        $this->jsons = collect($this->files)
            ->filter(fn (string $file) => Str::endsWith($file, '.json'))
            ->mapWithKeys(function (string $file) {
                $json = File::json($file);

                return [Arr::get($json, 'id') => $json];
            });

        $this->jsons
            ->filter(function (array $json) {
                $type = Arr::get($json, 'defs.main.type');
                if (in_array($type, ['query', 'procedure'], true)) {
                    return true;
                }
            })
            ->filter(fn ($json) => is_array($json))
            //->dump()
            ->mapToGroups(function (array $json, string $id) {
                // [app, bsky, actor, getProfile]
                $path = Str::of($id)->explode('.');
                // "getProfile"
                $name = $path->last();
                // "app/bsky/actor"
                $class = $path->take(3)->implode('/');

                $description = Arr::get($json, 'defs.main.description', $id);
                $description = Str::rtrim($description, '.').'.';

                // get/query parameters
                $parameters = Arr::get($json, 'defs.main.parameters');
                $params = $this->getParameters($id, $parameters);

                // post/procedure input schema
                if (blank($params)) {
                    $input = Arr::get($json, 'defs.main.input.schema');
                    $params = $this->getParameters($id, $input);
                }

                $type = match (Arr::get($json, 'defs.main.type')) {
                    'query' => 'get',
                    'procedure' => 'post',
                    default => throw new RuntimeException(),
                };

                $docs_url = Str::of($id)
                    ->replace('.', '-')
                    ->snake('-')
                    ->prepend('https://docs.bsky.app/docs/api/')
                    ->toString();

                return [
                    $class => collect([
                        'const' => ['name' => $name, 'id' => $id],
                        'method' => collect([
                            '    /**',
                            "     * $description",
                            '     *',
                            '     * @see '.$docs_url,
                            '     */',
                            '    #['.Str::studly($type).', NSID(self::'.$name.')]',
                            "    public function $name($params);",
                        ])->implode(PHP_EOL),
                    ]),
                ];
            })
            //->dump()
            ->each(function (Collection $contracts, string $class) {
                $this->save($contracts, $class);
            });
    }

    protected function getParameters(string $id, ?array $parameters): string
    {
        $required = Arr::get($parameters, 'required', []);

        $properties = Arr::get($parameters, 'properties', []);

        return collect($properties)
            ->map(function ($property, $name) use ($id, $required) {
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
                    'string' => 'string',
                    'unknown' => 'mixed',
                    'array', 'object', 'union' => 'array',
                    default => '',
                };

                $default = Arr::get($property, 'default');
                $require = in_array($name, $required, true);

                return compact('type', 'ref', 'default', 'require');
            })
            ->sortByDesc(function ($property, $name) use ($required) {
                return in_array($name, $required, true);
            })
            ->implode(function ($property, $name) {
                $type = Arr::get($property, 'type');
                $ref = Arr::get($property, 'ref');
                $require = Arr::get($property, 'require');
                $default = Arr::get($property, 'default');

                $sensitive = $name === 'password' ? '#[\SensitiveParameter]' : '';

                if (! $require) {
                    if (filled($default)) {
                        $name .= ' = ';
                        $name .= match ($type) {
                            'int', 'boolean' => "$default",
                            'string' => "'$default'",
                            'array' => '[]',
                            default => 'null',
                        };
                    }

                    if (filled($type) && $type !== 'mixed') {
                        $type = '?'.$type;
                    }

                    if (blank($default)) {
                        $name .= ' = null';
                    }
                }

                if (filled($ref)) {
                    $ref = "#[Ref('$ref')]";
                }

                return Str::squish($sensitive.' '.$ref.' '.$type.' $'.$name);
            }, ', ');
    }

    protected function save(Collection $contracts, string $class): void
    {
        // ["App", "Bsky, "Actor"]
        $path = Str::of($class)->explode('/')->map(fn ($item) => Str::studly($item));

        // "App/Bsky/Actor"
        $file_path = $path->take(3)->implode('/');
        // "Actor"
        $name = $path->last();
        // "App\Bsky"
        $namespace = $path->take(2)->implode('\\');

        $method = $contracts->implode('method', PHP_EOL.PHP_EOL);

        $const = $contracts->pluck('const')
            ->implode(function (array $const) {
                return sprintf("    public const %s = '%s';", $const['name'], $const['id']);
            }, PHP_EOL);

        $tmp = File::get(realpath(__DIR__.'/stubs/lexicon-interface.stub'));

        $tmp = Str::of($tmp)
            ->replace('{namespace}', $namespace)
            ->replace('{name}', $name)
            ->replace('{const}', $const)
            ->replace('{method}', $method)
            ->toString();

        $file_path = $this->php_path."/$file_path.php";
        File::ensureDirectoryExists(dirname($file_path));
        File::put($file_path, $tmp);

        $this->info($file_path);
    }
}
