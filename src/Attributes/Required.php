<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Required
{
    public function __construct(public array $required)
    {
    }
}
