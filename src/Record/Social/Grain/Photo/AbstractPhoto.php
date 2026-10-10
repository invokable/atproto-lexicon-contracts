<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Social\Grain\Photo;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;


#[Required(['photo', 'alt'])]
abstract class AbstractPhoto
{
    public const NSID = 'social.grain.photo';

    /**
     * Alt text description of the image, for accessibility.
     */
    protected string $alt;

    #[Blob(accept: ['image/*'], maxSize: 1000000)]
    protected array $photo;

    #[Format('datetime')]
    protected ?string $createdAt = null;

    #[Ref('social.grain.defs#aspectRatio')]
    protected ?array $aspectRatio = null;
}
