<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Graph
{
    public const getActorStarterPacks = 'app.bsky.graph.getActorStarterPacks';
    public const getBlocks = 'app.bsky.graph.getBlocks';
    public const getFollowers = 'app.bsky.graph.getFollowers';
    public const getFollows = 'app.bsky.graph.getFollows';
    public const getKnownFollowers = 'app.bsky.graph.getKnownFollowers';
    public const getList = 'app.bsky.graph.getList';
    public const getListBlocks = 'app.bsky.graph.getListBlocks';
    public const getListMutes = 'app.bsky.graph.getListMutes';
    public const getLists = 'app.bsky.graph.getLists';
    public const getMutes = 'app.bsky.graph.getMutes';
    public const getRelationships = 'app.bsky.graph.getRelationships';
    public const getStarterPack = 'app.bsky.graph.getStarterPack';
    public const getStarterPacks = 'app.bsky.graph.getStarterPacks';
    public const getSuggestedFollowsByActor = 'app.bsky.graph.getSuggestedFollowsByActor';
    public const muteActor = 'app.bsky.graph.muteActor';
    public const muteActorList = 'app.bsky.graph.muteActorList';
    public const muteThread = 'app.bsky.graph.muteThread';
    public const unmuteActor = 'app.bsky.graph.unmuteActor';
    public const unmuteActorList = 'app.bsky.graph.unmuteActorList';
    public const unmuteThread = 'app.bsky.graph.unmuteThread';

    /**
     * Get a list of starter packs created by the actor.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-actor-starter-packs
     */
    #[Get, NSID(self::getActorStarterPacks)]
    public function getActorStarterPacks(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates which accounts the requesting account is currently blocking. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-blocks
     */
    #[Get, NSID(self::getBlocks)]
    public function getBlocks(?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates accounts which follow a specified account (actor).
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-followers
     */
    #[Get, NSID(self::getFollowers)]
    public function getFollowers(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates accounts which a specified account (actor) follows.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-follows
     */
    #[Get, NSID(self::getFollows)]
    public function getFollows(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates accounts which follow a specified account (actor) and are followed by the viewer.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-known-followers
     */
    #[Get, NSID(self::getKnownFollowers)]
    public function getKnownFollowers(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Gets a 'view' (with additional context) of a specified list.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-list
     */
    #[Get, NSID(self::getList)]
    public function getList(string $list, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get mod lists that the requesting account (actor) is blocking. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-list-blocks
     */
    #[Get, NSID(self::getListBlocks)]
    public function getListBlocks(?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates mod lists that the requesting account (actor) currently has muted. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-list-mutes
     */
    #[Get, NSID(self::getListMutes)]
    public function getListMutes(?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates the lists created by a specified account (actor).
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-lists
     */
    #[Get, NSID(self::getLists)]
    public function getLists(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates accounts that the requesting account (actor) currently has muted. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-mutes
     */
    #[Get, NSID(self::getMutes)]
    public function getMutes(?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerates public relationships between one account, and a list of other accounts. Does not require auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-relationships
     */
    #[Get, NSID(self::getRelationships)]
    public function getRelationships(string $actor, ?array $others = null);

    /**
     * Gets a view of a starter pack.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-starter-pack
     */
    #[Get, NSID(self::getStarterPack)]
    public function getStarterPack(string $starterPack);

    /**
     * Get views for a list of starter packs.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-starter-packs
     */
    #[Get, NSID(self::getStarterPacks)]
    public function getStarterPacks(array $uris);

    /**
     * Enumerates follows similar to a given account (actor). Expected use is to recommend additional accounts immediately after following one account.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-get-suggested-follows-by-actor
     */
    #[Get, NSID(self::getSuggestedFollowsByActor)]
    public function getSuggestedFollowsByActor(string $actor);

    /**
     * Creates a mute relationship for the specified account. Mutes are private in Bluesky. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-mute-actor
     */
    #[Post, NSID(self::muteActor)]
    public function muteActor(string $actor);

    /**
     * Creates a mute relationship for the specified list of accounts. Mutes are private in Bluesky. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-mute-actor-list
     */
    #[Post, NSID(self::muteActorList)]
    public function muteActorList(string $list);

    /**
     * Mutes a thread preventing notifications from the thread and any of its children. Mutes are private in Bluesky. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-mute-thread
     */
    #[Post, NSID(self::muteThread)]
    public function muteThread(string $root);

    /**
     * Unmutes the specified account. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-unmute-actor
     */
    #[Post, NSID(self::unmuteActor)]
    public function unmuteActor(string $actor);

    /**
     * Unmutes the specified list of accounts. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-unmute-actor-list
     */
    #[Post, NSID(self::unmuteActorList)]
    public function unmuteActorList(string $list);

    /**
     * Unmutes the specified thread. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-graph-unmute-thread
     */
    #[Post, NSID(self::unmuteThread)]
    public function unmuteThread(string $root);
}
