<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Union
{
    public function __construct(public array $refs) {}
}
