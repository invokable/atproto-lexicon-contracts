<?php

namespace Revolution\AtProto\Lexicon\Types;

/**
 * Blob object.
 *
 * ```
 * [
 *     '$type' => 'blob',
 *     'ref' => [
 *         '$link' => '...',
 *     'mimeType' => 'image/png',
 *     'size' => 100000,
 * ]
 * ```
 */
abstract class AbstractBlob
{
    protected string $type = 'blob';

    protected string $link;

    protected string $mimeType;

    protected int $size;
}
