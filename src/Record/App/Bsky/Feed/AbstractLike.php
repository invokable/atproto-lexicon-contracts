<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record declaring a 'like' of a piece of subject content.
 */
abstract class AbstractLike
{
    public const NSID = 'app.bsky.feed.like';

    #[Ref('com.atproto.repo.strongRef')]
    protected array $subject;

    protected string $createdAt;
}
