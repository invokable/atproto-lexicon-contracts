<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A set of images embedded in a Bluesky record (eg, a post).
 */
#[Required(['images'])]
abstract class AbstractImages
{
    public const NSID = 'app.bsky.embed.images';

    #[Ref('app.bsky.embed.images#image')]
    protected array $images;
}
