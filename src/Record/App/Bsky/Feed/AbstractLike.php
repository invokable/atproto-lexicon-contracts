<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record declaring a 'like' of a piece of subject content.
 */
#[Required(['subject', 'createdAt'])]
abstract class AbstractLike
{
    public const NSID = 'app.bsky.feed.like';

    #[Ref('com.atproto.repo.strongRef')]
    protected array $subject;

    #[Format('datetime')]
    protected string $createdAt;

    #[Ref('com.atproto.repo.strongRef')]
    protected ?array $via = null;
}
