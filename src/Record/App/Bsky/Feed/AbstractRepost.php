<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record representing a 'repost' of an existing Bluesky post.
 */
#[Required(['subject', 'createdAt'])]
abstract class AbstractRepost
{
    public const NSID = 'app.bsky.feed.repost';

    #[Ref('com.atproto.repo.strongRef')]
    protected array $subject;

    #[Format('datetime')]
    protected string $createdAt;
}
