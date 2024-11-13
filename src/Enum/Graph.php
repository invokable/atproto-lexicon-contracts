<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Enum;

enum Graph: string
{
    /**
     * Record declaring a 'block' relationship against another account. NOTE: blocks are public in Bluesky; see blog posts for details.
     */
    case Block = 'app.bsky.graph.block';

    /**
     * Record declaring a social 'follow' relationship of another account. Duplicate follows will be ignored by the AppView.
     */
    case Follow = 'app.bsky.graph.follow';

    /**
     * Record representing a list of accounts (actors). Scope includes both moderation-oriented lists and curration-oriented lists.
     */
    case List = 'app.bsky.graph.list';

    /**
     * Record representing a block relationship against an entire an entire list of accounts (actors).
     */
    case Listblock = 'app.bsky.graph.listblock';

    /**
     * Record representing an account's inclusion on a specific list. The AppView will ignore duplicate listitem records.
     */
    case Listitem = 'app.bsky.graph.listitem';

    /**
     * Record defining a starter pack of actors and feeds for new users.
     */
    case Starterpack = 'app.bsky.graph.starterpack';
}
