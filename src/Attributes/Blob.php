<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Blob
{
    public function __construct(public array $accept, public int $maxSize)
    {
    }
}
