<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Social\Grain\Gallery;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;


#[Required(['title', 'createdAt'])]
abstract class AbstractGallery
{
    public const NSID = 'social.grain.gallery';

    protected string $title;

    /**
     * Self-label values for this post. Effectively content warnings.
     */
    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    #[Format('datetime')]
    protected string $createdAt;

    protected ?string $description = null;
}
