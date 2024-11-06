<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Enum;

enum Feed: string
{
    /**
     * Record declaring of the existence of a feed generator, and containing metadata about it. The record can exist in any repository.
     */
    case Generator = 'app.bsky.feed.generator';

    /**
     * Record declaring a 'like' of a piece of subject content.
     */
    case Like = 'app.bsky.feed.like';

    /**
     * Record containing a Bluesky post.
     */
    case Post = 'app.bsky.feed.post';

    /**
     * Record defining interaction rules for a post. The record key (rkey) of the postgate record must match the record key of the post, and that record must be in the same repository.
     */
    case Postgate = 'app.bsky.feed.postgate';

    /**
     * Record representing a 'repost' of an existing Bluesky post.
     */
    case Repost = 'app.bsky.feed.repost';

    /**
     * Record defining interaction gating rules for a thread (aka, reply controls). The record key (rkey) of the threadgate record must match the record key of the thread's root post, and that record must be in the same repository.
     */
    case Threadgate = 'app.bsky.feed.threadgate';
}
