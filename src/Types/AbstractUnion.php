<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Types;

/**
 * Union object.
 *
 * ```
 * [
 *     '$type' => '...',
 *     '...' => [],
 * ]
 * ```
 */
abstract class AbstractUnion
{
    protected string $type;
}
