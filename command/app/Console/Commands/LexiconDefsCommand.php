<?php

declare(strict_types=1);

namespace App\Console\Commands;

use InvalidArgumentException;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Generate an array that combines all lexicon definitions.
 *
 * ```
 * php artisan bluesky:lexicon-defs
 * ```
 *
 * update lexicon
 * ```
 * git submodule update --remote
 * ```
 */
class LexiconDefsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bluesky:lexicon-defs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate an array that combines all lexicon definitions';

    protected string $php_path;

    protected string $json_path;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->php_path = realpath(__DIR__.'/../../../../src/Lexicons/');
        $this->json_path = realpath(__DIR__.'/../../../../atproto/lexicons/');

        $files = File::allFiles($this->json_path);

        $defs = collect($files)
            ->filter(fn (string $file) => Str::endsWith($file, '.json'))
            ->mapWithKeys(function (string $file) {
                $json = File::json($file);

                return [Arr::get($json, 'id') => $json];
            })->map(function (array $def, string $id) {
                $uri = $this->toLexUri($id);

                return $this->resolveRefUris(def: $def, baseUri: $uri);
            })
            ->toArray();

        $tmp = File::get(realpath(__DIR__.'/stubs/lexicon-defs.stub'));

        $tmp = Str::of($tmp)
            ->replace('{defs}', var_export($defs, true))
            ->toString();

        $file_path = $this->php_path.'/defs.php';
        File::put($file_path, $tmp);
        $this->info($file_path);

        return 0;
    }

    protected function resolveRefUris(array $def, string $baseUri): array
    {
        collect($def)
            ->each(function ($obj, $k) use (&$def, $baseUri) {
                if (data_get($def, 'type') === 'ref') {
                    $def['ref'] = $this->toLexUri(data_get($def, 'ref'), $baseUri);
                } elseif (data_get($def, 'type') === 'union') {
                    $def['refs'] = collect($def['refs'])->map(fn ($ref) => $this->toLexUri($ref, $baseUri))->toArray();
                } elseif (is_array($def[$k]) && Arr::isList($def[$k])) {
                    $def[$k] = collect($def[$k])
                        ->map(function ($item) use ($baseUri) {
                            if (is_string($item)) {
                                return Str::startsWith($item, '#') ? $this->toLexUri($item, $baseUri) : $item;
                            } elseif (is_array($item)) {
                                return $this->resolveRefUris($item, $baseUri);
                            }
                            return $item;
                        })->toArray();
                } elseif (is_array($def[$k]) && Arr::isAssoc($def[$k])) {
                    $def[$k] = $this->resolveRefUris($def[$k], $baseUri);
                }
            });

        return $def;
    }

    protected function toLexUri(string $uri, ?string $baseUri = null): string
    {
        if (Str::substrCount($uri, '#') > 2) {
            throw new InvalidArgumentException();
        }

        if (Str::startsWith($uri, 'lex:')) {
            return $uri;
        }

        if (Str::startsWith($uri, '#')) {
            if (empty($baseUri)) {
                throw new InvalidArgumentException();
            }

            return $baseUri.$uri;
        }

        return 'lex:'.$uri;
    }
}
