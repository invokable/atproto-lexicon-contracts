<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record defining interaction gating rules for a thread (aka, reply controls). The record key (rkey) of the threadgate record must match the record key of the thread's root post, and that record must be in the same repository.
 */
abstract class AbstractThreadgate
{
    public const NSID ='app.bsky.feed.threadgate';

   /**
    * Reference (AT-URI) to the post record.
    */
    protected string $post;

    protected ?array $allow = null;

    protected string $createdAt;

   /**
    * List of hidden reply URIs.
    */
    protected ?array $hiddenReplies = null;
}
