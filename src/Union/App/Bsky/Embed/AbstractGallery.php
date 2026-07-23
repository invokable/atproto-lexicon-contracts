<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * An assortment of media embedded in a Bluesky record (eg, a post).
 */
#[Required(['items'])]
abstract class AbstractGallery
{
    public const NSID = 'app.bsky.embed.gallery';

    /**
     * The schema-level maxLength of 20 is a future-proof ceiling. Clients should currently enforce a soft limit of 10 items in authoring UIs.
     */
    #[Union(['app.bsky.embed.gallery#image'])]
    protected array $items;
}
