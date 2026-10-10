<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Social\Grain\Gallery;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;


#[Required(['createdAt', 'gallery', 'item'])]
abstract class AbstractItem
{
    public const NSID = 'social.grain.gallery.item';

    #[Format('at-uri')]
    protected string $item;

    #[Format('at-uri')]
    protected string $gallery;

    protected ?int $position = null;

    #[Format('datetime')]
    protected string $createdAt;
}
