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
 * Record defining interaction gating rules for a thread (aka, reply controls). The record key (rkey) of the threadgate record must match the record key of the thread's root post, and that record must be in the same repository.
 */
#[Required(['post', 'createdAt'])]
abstract class AbstractThreadgate
{
    public const NSID = 'app.bsky.feed.threadgate';

    /**
     * Reference (AT-URI) to the post record.
     */
    #[Format('at-uri')]
    protected string $post;

    /**
     * List of rules defining who can reply to this post. If value is an empty array, no one can reply. If value is undefined, anyone can reply.
     */
    #[Union(['app.bsky.feed.threadgate#mentionRule', 'app.bsky.feed.threadgate#followerRule', 'app.bsky.feed.threadgate#followingRule', 'app.bsky.feed.threadgate#listRule'])]
    protected ?array $allow = null;

    #[Format('datetime')]
    protected string $createdAt;

    /**
     * List of hidden reply URIs.
     */
    #[Format('at-uri')]
    protected ?array $hiddenReplies = null;
}
