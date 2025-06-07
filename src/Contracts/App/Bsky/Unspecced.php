<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;

interface Unspecced
{
    public const getConfig = 'app.bsky.unspecced.getConfig';
    public const getPopularFeedGenerators = 'app.bsky.unspecced.getPopularFeedGenerators';
    public const getPostThreadOtherV2 = 'app.bsky.unspecced.getPostThreadOtherV2';
    public const getPostThreadV2 = 'app.bsky.unspecced.getPostThreadV2';
    public const getSuggestedFeeds = 'app.bsky.unspecced.getSuggestedFeeds';
    public const getSuggestedFeedsSkeleton = 'app.bsky.unspecced.getSuggestedFeedsSkeleton';
    public const getSuggestedStarterPacks = 'app.bsky.unspecced.getSuggestedStarterPacks';
    public const getSuggestedStarterPacksSkeleton = 'app.bsky.unspecced.getSuggestedStarterPacksSkeleton';
    public const getSuggestedUsers = 'app.bsky.unspecced.getSuggestedUsers';
    public const getSuggestedUsersSkeleton = 'app.bsky.unspecced.getSuggestedUsersSkeleton';
    public const getSuggestionsSkeleton = 'app.bsky.unspecced.getSuggestionsSkeleton';
    public const getTaggedSuggestions = 'app.bsky.unspecced.getTaggedSuggestions';
    public const getTrendingTopics = 'app.bsky.unspecced.getTrendingTopics';
    public const getTrends = 'app.bsky.unspecced.getTrends';
    public const getTrendsSkeleton = 'app.bsky.unspecced.getTrendsSkeleton';
    public const searchActorsSkeleton = 'app.bsky.unspecced.searchActorsSkeleton';
    public const searchPostsSkeleton = 'app.bsky.unspecced.searchPostsSkeleton';
    public const searchStarterPacksSkeleton = 'app.bsky.unspecced.searchStarterPacksSkeleton';

    public const getConfigResponse = ['checkEmailConfirmed' => 'bool', 'liveNow' => [['did' => 'string', 'domains' => 'array']]];
    public const getPopularFeedGeneratorsResponse = ['cursor' => 'string', 'feeds' => [['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'contentMode' => 'string', 'indexedAt' => 'string']]];
    public const getPostThreadOtherV2Response = ['thread' => [['uri' => 'string', 'depth' => 'int', 'value' => 'array']]];
    public const getPostThreadV2Response = ['thread' => [['uri' => 'string', 'depth' => 'int', 'value' => 'array']], 'threadgate' => ['uri' => 'string', 'cid' => 'string', 'record' => 'mixed', 'lists' => 'array'], 'hasOtherReplies' => 'bool'];
    public const getSuggestedFeedsResponse = ['feeds' => [['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'contentMode' => 'string', 'indexedAt' => 'string']]];
    public const getSuggestedFeedsSkeletonResponse = ['feeds' => 'array'];
    public const getSuggestedStarterPacksResponse = ['starterPacks' => [['uri' => 'string', 'cid' => 'string', 'record' => 'mixed', 'creator' => 'array', 'list' => 'array', 'listItemsSample' => 'array', 'feeds' => 'array', 'joinedWeekCount' => 'int', 'joinedAllTimeCount' => 'int', 'labels' => 'array', 'indexedAt' => 'string']]];
    public const getSuggestedStarterPacksSkeletonResponse = ['starterPacks' => 'array'];
    public const getSuggestedUsersResponse = ['actors' => [['did' => 'string', 'handle' => 'string', 'displayName' => 'string', 'description' => 'string', 'avatar' => 'string', 'associated' => 'array', 'indexedAt' => 'string', 'createdAt' => 'string', 'viewer' => 'array', 'labels' => 'array', 'verification' => 'array', 'status' => 'array']]];
    public const getSuggestedUsersSkeletonResponse = ['dids' => 'array'];
    public const getSuggestionsSkeletonResponse = ['cursor' => 'string', 'actors' => [['did' => 'string']], 'relativeToDid' => 'string', 'recId' => 'int'];
    public const getTaggedSuggestionsResponse = ['suggestions' => [['tag' => 'string', 'subjectType' => 'string', 'subject' => 'string']]];
    public const getTrendingTopicsResponse = ['topics' => [['topic' => 'string', 'displayName' => 'string', 'description' => 'string', 'link' => 'string']], 'suggested' => [['topic' => 'string', 'displayName' => 'string', 'description' => 'string', 'link' => 'string']]];
    public const getTrendsResponse = ['trends' => [['topic' => 'string', 'displayName' => 'string', 'link' => 'string', 'startedAt' => 'string', 'postCount' => 'int', 'status' => 'string', 'category' => 'string', 'actors' => 'array']]];
    public const getTrendsSkeletonResponse = ['trends' => [['topic' => 'string', 'displayName' => 'string', 'link' => 'string', 'startedAt' => 'string', 'postCount' => 'int', 'status' => 'string', 'category' => 'string', 'dids' => 'array']]];
    public const searchActorsSkeletonResponse = ['cursor' => 'string', 'hitsTotal' => 'int', 'actors' => [['did' => 'string']]];
    public const searchPostsSkeletonResponse = ['cursor' => 'string', 'hitsTotal' => 'int', 'posts' => [['uri' => 'string']]];
    public const searchStarterPacksSkeletonResponse = ['cursor' => 'string', 'hitsTotal' => 'int', 'starterPacks' => [['uri' => 'string']]];

    /**
     * Get miscellaneous runtime configuration.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-config
     */
    #[Get, NSID(self::getConfig)]
    #[Output(self::getConfigResponse)]
    public function getConfig();

    /**
     * An unspecced view of globally popular feed generators.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-popular-feed-generators
     */
    #[Get, NSID(self::getPopularFeedGenerators)]
    #[Output(self::getPopularFeedGeneratorsResponse)]
    public function getPopularFeedGenerators(?int $limit = 50, ?string $cursor = null, ?string $query = null);

    /**
     * (NOTE: this endpoint is under development and WILL change without notice. Don't use it until it is moved out of `unspecced` or your application WILL break) Get additional posts under a thread e.g. replies hidden by threadgate. Based on an anchor post at any depth of the tree, returns top-level replies below that anchor. It does not include ancestors nor the anchor itself. This should be called after exhausting `app.bsky.unspecced.getPostThreadV2`. Does not require auth, but additional metadata and filtering will be applied for authed requests.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-post-thread-other-v2
     */
    #[Get, NSID(self::getPostThreadOtherV2)]
    #[Output(self::getPostThreadOtherV2Response)]
    public function getPostThreadOtherV2(#[Format('at-uri')] string $anchor, ?bool $prioritizeFollowedUsers = null);

    /**
     * (NOTE: this endpoint is under development and WILL change without notice. Don't use it until it is moved out of `unspecced` or your application WILL break) Get posts in a thread. It is based in an anchor post at any depth of the tree, and returns posts above it (recursively resolving the parent, without further branching to their replies) and below it (recursive replies, with branching to their replies). Does not require auth, but additional metadata and filtering will be applied for authed requests.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-post-thread-v2
     */
    #[Get, NSID(self::getPostThreadV2)]
    #[Output(self::getPostThreadV2Response)]
    public function getPostThreadV2(#[Format('at-uri')] string $anchor, ?bool $above = null, ?int $below = 6, ?int $branchingFactor = 10, ?bool $prioritizeFollowedUsers = null, #[KnownValues(['newest', 'oldest', 'top'])] ?string $sort = 'oldest');

    /**
     * Get a list of suggested feeds.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-feeds
     */
    #[Get, NSID(self::getSuggestedFeeds)]
    #[Output(self::getSuggestedFeedsResponse)]
    public function getSuggestedFeeds(?int $limit = 10);

    /**
     * Get a skeleton of suggested feeds. Intended to be called and hydrated by app.bsky.unspecced.getSuggestedFeeds.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-feeds-skeleton
     */
    #[Get, NSID(self::getSuggestedFeedsSkeleton)]
    #[Output(self::getSuggestedFeedsSkeletonResponse)]
    public function getSuggestedFeedsSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Get a list of suggested starterpacks.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-starter-packs
     */
    #[Get, NSID(self::getSuggestedStarterPacks)]
    #[Output(self::getSuggestedStarterPacksResponse)]
    public function getSuggestedStarterPacks(?int $limit = 10);

    /**
     * Get a skeleton of suggested starterpacks. Intended to be called and hydrated by app.bsky.unspecced.getSuggestedStarterpacks.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-starter-packs-skeleton
     */
    #[Get, NSID(self::getSuggestedStarterPacksSkeleton)]
    #[Output(self::getSuggestedStarterPacksSkeletonResponse)]
    public function getSuggestedStarterPacksSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Get a list of suggested users.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-users
     */
    #[Get, NSID(self::getSuggestedUsers)]
    #[Output(self::getSuggestedUsersResponse)]
    public function getSuggestedUsers(?string $category = null, ?int $limit = 25);

    /**
     * Get a skeleton of suggested users. Intended to be called and hydrated by app.bsky.unspecced.getSuggestedUsers.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-users-skeleton
     */
    #[Get, NSID(self::getSuggestedUsersSkeleton)]
    #[Output(self::getSuggestedUsersSkeletonResponse)]
    public function getSuggestedUsersSkeleton(#[Format('did')] ?string $viewer = null, ?string $category = null, ?int $limit = 25);

    /**
     * Get a skeleton of suggested actors. Intended to be called and then hydrated through app.bsky.actor.getSuggestions.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggestions-skeleton
     */
    #[Get, NSID(self::getSuggestionsSkeleton)]
    #[Output(self::getSuggestionsSkeletonResponse)]
    public function getSuggestionsSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 50, ?string $cursor = null, #[Format('did')] ?string $relativeToDid = null);

    /**
     * Get a list of suggestions (feeds and users) tagged with categories.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-tagged-suggestions
     */
    #[Get, NSID(self::getTaggedSuggestions)]
    #[Output(self::getTaggedSuggestionsResponse)]
    public function getTaggedSuggestions();

    /**
     * Get a list of trending topics.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-trending-topics
     */
    #[Get, NSID(self::getTrendingTopics)]
    #[Output(self::getTrendingTopicsResponse)]
    public function getTrendingTopics(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Get the current trends on the network.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-trends
     */
    #[Get, NSID(self::getTrends)]
    #[Output(self::getTrendsResponse)]
    public function getTrends(?int $limit = 10);

    /**
     * Get the skeleton of trends on the network. Intended to be called and then hydrated through app.bsky.unspecced.getTrends.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-trends-skeleton
     */
    #[Get, NSID(self::getTrendsSkeleton)]
    #[Output(self::getTrendsSkeletonResponse)]
    public function getTrendsSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Backend Actors (profile) search, returns only skeleton.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-search-actors-skeleton
     */
    #[Get, NSID(self::searchActorsSkeleton)]
    #[Output(self::searchActorsSkeletonResponse)]
    public function searchActorsSkeleton(string $q, #[Format('did')] ?string $viewer = null, ?bool $typeahead = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Backend Posts search, returns only skeleton.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-search-posts-skeleton
     */
    #[Get, NSID(self::searchPostsSkeleton)]
    #[Output(self::searchPostsSkeletonResponse)]
    public function searchPostsSkeleton(string $q, #[KnownValues(['top', 'latest'])] ?string $sort = 'latest', ?string $since = null, ?string $until = null, #[Format('at-identifier')] ?string $mentions = null, #[Format('at-identifier')] ?string $author = null, #[Format('language')] ?string $lang = null, ?string $domain = null, #[Format('uri')] ?string $url = null, ?array $tag = null, #[Format('did')] ?string $viewer = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Backend Starter Pack search, returns only skeleton.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-search-starter-packs-skeleton
     */
    #[Get, NSID(self::searchStarterPacksSkeleton)]
    #[Output(self::searchStarterPacksSkeletonResponse)]
    public function searchStarterPacksSkeleton(string $q, #[Format('did')] ?string $viewer = null, ?int $limit = 25, ?string $cursor = null);
}
