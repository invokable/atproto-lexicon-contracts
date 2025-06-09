<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class KnownValues
{
    public function __construct(public array $values) {}
}
