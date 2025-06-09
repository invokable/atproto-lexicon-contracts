<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class NSID
{
    public function __construct(public string $id) {}
}
