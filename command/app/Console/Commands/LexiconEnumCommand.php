<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Generate php enum from lexicon json.
 *
 * ```
 * php artisan bluesky:lexicon-enum
 * ```
 *
 * update lexicon
 * ```
 * git submodule update --remote
 * ```
 */
class LexiconEnumCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bluesky:lexicon-enum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate php enum from lexicon json';

    protected string $php_path;

    protected string $json_path;

    protected array $files;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->php_path = realpath(__DIR__.'/../../../../src/Enum/');
        $this->json_path = realpath(__DIR__.'/../../../../atproto/lexicons/');

        File::cleanDirectory($this->php_path);

        $this->files = File::allFiles($this->json_path);

        $this->embed();
        $this->facet();
        $this->feed();
        $this->graph();
        $this->threadgate();

        return 0;
    }

    protected function embed(): void
    {
        $enum = collect($this->files)
            ->filter(fn (string $file) => Str::contains($file, '/app/bsky/embed'))
            ->mapWithKeys(fn (string $file) => [Str::of($file)->basename()->chopEnd('.json')->studly()->toString() => $file])
            ->map(function (string $file) {
                $json = File::json($file);

                $type = Arr::get($json, 'defs.main.type');
                if ($type === 'object') {
                    return $json;
                }
            })
            ->filter(fn ($json) => is_array($json))
            //->dump()
            ->implode(function (array $json, string $name) {
                $description = Arr::get($json, 'defs.main.description', Arr::get($json, 'description'));
                $id = Arr::get($json, 'id');

                return collect([
                    '    /**',
                    "     * $description",
                    '     */',
                    "    case $name = '$id';",
                ])->implode(PHP_EOL);
            }, PHP_EOL.PHP_EOL);

        $this->save($enum, 'Embed');
    }

    protected function facet(): void
    {
        $file = collect($this->files)
            ->filter(fn (string $file) => Str::contains($file, '/app/bsky/richtext/facet'))
            ->first();

        $json = File::json($file);

        $id = Arr::get($json, 'id');
        $facets = Arr::get($json, 'defs.main.properties.features.items.refs');

        $enum = collect($facets)
            ->mapWithKeys(fn (string $facet) => [Str::of($facet)->remove('#')->toString() => $id.$facet])
            //->dump()
            ->implode(function (string $file, string $name) use ($json) {
                $description = Arr::get($json, 'defs.'.$name.'.description');
                $name = Str::studly($name);

                return collect([
                    '    /**',
                    "     * $description",
                    '     */',
                    "    case $name = '$file';",
                ])->implode(PHP_EOL);
            }, PHP_EOL.PHP_EOL);

        $this->save($enum, 'Facet');
    }

    protected function feed(): void
    {
        $enum = collect($this->files)
            ->filter(fn (string $file) => Str::contains($file, '/app/bsky/feed'))
            ->mapWithKeys(fn (string $file) => [Str::of($file)->basename()->chopEnd('.json')->studly()->toString() => $file])
            ->map(function (string $file) {
                $json = File::json($file);

                $type = Arr::get($json, 'defs.main.type');
                if ($type === 'record') {
                    return $json;
                }
            })
            ->filter(fn ($json) => is_array($json))
            ->implode(function (array $json, string $name) {
                $description = Arr::get($json, 'defs.main.description');
                $id = Arr::get($json, 'id');

                return collect([
                    '    /**',
                    "     * $description",
                    '     */',
                    "    case $name = '$id';",
                ])->implode(PHP_EOL);
            }, PHP_EOL.PHP_EOL);

        $this->save($enum, 'Feed');
    }

    protected function graph(): void
    {
        $enum = collect($this->files)
            ->filter(fn (string $file) => Str::contains($file, '/app/bsky/graph'))
            ->mapWithKeys(fn (string $file) => [Str::of($file)->basename()->chopEnd('.json')->studly()->toString() => $file])
            ->map(function (string $file) {
                $json = File::json($file);

                $type = Arr::get($json, 'defs.main.type');
                if ($type === 'record') {
                    return $json;
                }
            })
            ->filter(fn ($json) => is_array($json))
            ->implode(function (array $json, string $name) {
                $description = Arr::get($json, 'defs.main.description');
                $id = Arr::get($json, 'id');

                return collect([
                    '    /**',
                    "     * $description",
                    '     */',
                    "    case $name = '$id';",
                ])->implode(PHP_EOL);
            }, PHP_EOL.PHP_EOL);

        $this->save($enum, 'Graph');
    }

    protected function threadgate(): void
    {
        $file = collect($this->files)
            ->filter(fn (string $file) => Str::contains($file, '/app/bsky/feed/threadgate'))
            ->first();

        $json = File::json($file);

        $id = Arr::get($json, 'id');
        $rules = Arr::get($json, 'defs.main.record.properties.allow.items.refs');

        $enum = collect($rules)
            ->mapWithKeys(fn (string $rule) => [Str::of($rule)->remove('#')->toString() => $id.$rule])
            //->dump()
            ->implode(function (string $rule, string $name) use ($json) {
                $description = Arr::get($json, 'defs.'.$name.'.description');
                $name = Str::studly($name);

                return collect([
                    '    /**',
                    "     * $description",
                    '     */',
                    "    case $name = '$rule';",
                ])->implode(PHP_EOL);
            }, PHP_EOL.PHP_EOL);

        $this->save($enum, 'ThreadGate');
    }

    protected function save(string $enum, string $name): void
    {
        $tmp = File::get(realpath(__DIR__.'/stubs/lexicon-enum.stub'));

        $tmp = Str::of($tmp)
            ->replace('{name}', $name)
            ->replace('{dummy}', $enum)
            ->toString();

        $file_path = $this->php_path."/$name.php";
        File::put($file_path, $tmp);

        $this->info($file_path);
    }
}
