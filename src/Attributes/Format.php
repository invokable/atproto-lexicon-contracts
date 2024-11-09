<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Format
{
    public function __construct(public string $format)
    {
    }
}
