<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Lexicons;

use InvalidArgumentException;

abstract class AbstractLexicons
{
    protected array $defs;

    public function __construct()
    {
        $this->defs = require_once __DIR__.'/defs.php';
    }

    /**
     * This is just an example, so inherit this class and create your own methods.
     *
     * @param  string  $id  e.g. `app.bsky.feed.post`, `app.bsky.feed.defs#postView`, `com.atproto.repo.createRecord#main`
     */
    public function getDef(string $id): array
    {
        if (str_contains($id, '#')) {
            [$id, $hash] = explode('#', $id, 2);
        }

        $def = $this->defs[$id] ?? [];

        if (! empty($hash)) {
            $def = $def['defs'][$hash] ?? [];
        }

        return $def;
    }

    public function getDefOrThrow(string $id): array
    {
        $def = $this->getDef($id);

        if (empty($def)) {
            throw new InvalidArgumentException;
        }

        return $def;
    }

    public function all(): array
    {
        return $this->defs;
    }
}
