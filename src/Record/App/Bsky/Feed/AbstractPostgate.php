<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record defining interaction rules for a post. The record key (rkey) of the postgate record must match the record key of the post, and that record must be in the same repository.
 */
#[Required(['post', 'createdAt'])]
abstract class AbstractPostgate
{
    public const NSID = 'app.bsky.feed.postgate';

    #[Format('datetime')]
    protected string $createdAt;

    /**
     * Reference (AT-URI) to the post record.
     */
    #[Format('at-uri')]
    protected string $post;

    /**
     * List of AT-URIs embedding this post that the author has detached from.
     */
    #[Format('at-uri')]
    protected ?array $detachedEmbeddingUris = null;

    /**
     * List of rules defining who can embed this post. If value is an empty array or is undefined, no particular rules apply and anyone can embed.
     */
    #[Union(['app.bsky.feed.postgate#disableRule'])]
    protected ?array $embeddingRules = null;
}
