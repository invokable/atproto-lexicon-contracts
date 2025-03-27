<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A representation of a record embedded in a Bluesky record (eg, a post). For example, a quote-post, or sharing a feed generator record.
 */
#[Required(['record'])]
abstract class AbstractRecord
{
    public const NSID = 'app.bsky.embed.record';

    #[Ref('com.atproto.repo.strongRef')]
    protected array $record;
}
