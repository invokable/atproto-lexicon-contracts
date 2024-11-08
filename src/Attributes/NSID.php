<?php

namespace Revolution\AtProto\Lexicon\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class NSID
{
    public function __construct(public string $id)
    {
    }
}
