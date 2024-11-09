<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record defining interaction rules for a post. The record key (rkey) of the postgate record must match the record key of the post, and that record must be in the same repository.
 */
abstract class AbstractPostgate
{
    public const NSID ='app.bsky.feed.postgate';

    protected string $createdAt;

   /**
    * Reference (AT-URI) to the post record.
    */
    protected string $post;

   /**
    * List of AT-URIs embedding this post that the author has detached from.
    */
    protected ?array $detachedEmbeddingUris = null;

    protected ?array $embeddingRules = null;
}
