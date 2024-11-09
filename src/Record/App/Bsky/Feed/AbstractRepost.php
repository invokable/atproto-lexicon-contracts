<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record representing a 'repost' of an existing Bluesky post.
 */
abstract class AbstractRepost
{
    public const NSID ='app.bsky.feed.repost';

    #[Ref('com.atproto.repo.strongRef')]
    protected array $subject;

    protected string $createdAt;
}
