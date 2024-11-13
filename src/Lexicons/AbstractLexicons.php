<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Lexicons;

abstract class AbstractLexicons
{
    protected array $defs;

    public function __construct()
    {
        $this->defs = require_once __DIR__.'/defs.php';
    }

    public function get(string $id): array
    {
        return $this->defs[$id] ?? [];
    }
}
