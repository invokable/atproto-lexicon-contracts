<?php

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
