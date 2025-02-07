<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Enum;

enum ThreadGateRule: string
{
    /**
     * Allow replies from actors mentioned in your post.
     */
    case MentionRule = 'app.bsky.feed.threadgate#mentionRule';

    /**
     * Allow replies from actors who follow you.
     */
    case FollowerRule = 'app.bsky.feed.threadgate#followerRule';

    /**
     * Allow replies from actors you follow.
     */
    case FollowingRule = 'app.bsky.feed.threadgate#followingRule';

    /**
     * Allow replies from actors on a list.
     */
    case ListRule = 'app.bsky.feed.threadgate#listRule';
}
