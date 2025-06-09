<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Output
{
    public function __construct(public array $schema) {}
}
