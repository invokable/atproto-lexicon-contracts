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
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Unspecced
{
    public const getAgeAssuranceState = 'app.bsky.unspecced.getAgeAssuranceState';
    public const getConfig = 'app.bsky.unspecced.getConfig';
    public const getOnboardingSuggestedStarterPacks = 'app.bsky.unspecced.getOnboardingSuggestedStarterPacks';
    public const getOnboardingSuggestedStarterPacksSkeleton = 'app.bsky.unspecced.getOnboardingSuggestedStarterPacksSkeleton';
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
    public const initAgeAssurance = 'app.bsky.unspecced.initAgeAssurance';
    public const searchActorsSkeleton = 'app.bsky.unspecced.searchActorsSkeleton';
    public const searchPostsSkeleton = 'app.bsky.unspecced.searchPostsSkeleton';
    public const searchStarterPacksSkeleton = 'app.bsky.unspecced.searchStarterPacksSkeleton';

    /**
     * Returns the current state of the age assurance process for an account. This is used to check if the user has completed age assurance or if further action is required.
     *
     * @return array{lastInitiatedAt: string, status: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-age-assurance-state
     */
    #[Get, NSID(self::getAgeAssuranceState)]
    public function getAgeAssuranceState();

    /**
     * Get miscellaneous runtime configuration.
     *
     * @return array{checkEmailConfirmed: bool, liveNow: array{did: string, domains: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-config
     */
    #[Get, NSID(self::getConfig)]
    public function getConfig();

    /**
     * Get a list of suggested starterpacks for onboarding.
     *
     * @return array{starterPacks: array{uri: string, cid: string, record: mixed, creator: array, list: array, listItemsSample: array, feeds: array, joinedWeekCount: int, joinedAllTimeCount: int, labels: array, indexedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-onboarding-suggested-starter-packs
     */
    #[Get, NSID(self::getOnboardingSuggestedStarterPacks)]
    public function getOnboardingSuggestedStarterPacks(?int $limit = 10);

    /**
     * Get a skeleton of suggested starterpacks for onboarding. Intended to be called and hydrated by app.bsky.unspecced.getOnboardingSuggestedStarterPacks.
     *
     * @return array{starterPacks: array}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-onboarding-suggested-starter-packs-skeleton
     */
    #[Get, NSID(self::getOnboardingSuggestedStarterPacksSkeleton)]
    public function getOnboardingSuggestedStarterPacksSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * An unspecced view of globally popular feed generators.
     *
     * @return array{cursor: string, feeds: array{uri: string, cid: string, did: string, creator: array, displayName: string, description: string, descriptionFacets: array, avatar: string, likeCount: int, acceptsInteractions: bool, labels: array, viewer: array, contentMode: string, indexedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-popular-feed-generators
     */
    #[Get, NSID(self::getPopularFeedGenerators)]
    public function getPopularFeedGenerators(?int $limit = 50, ?string $cursor = null, ?string $query = null);

    /**
     * (NOTE: this endpoint is under development and WILL change without notice. Don't use it until it is moved out of `unspecced` or your application WILL break) Get additional posts under a thread e.g. replies hidden by threadgate. Based on an anchor post at any depth of the tree, returns top-level replies below that anchor. It does not include ancestors nor the anchor itself. This should be called after exhausting `app.bsky.unspecced.getPostThreadV2`. Does not require auth, but additional metadata and filtering will be applied for authed requests.
     *
     * @return array{thread: array{uri: string, depth: int, value: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-post-thread-other-v2
     */
    #[Get, NSID(self::getPostThreadOtherV2)]
    public function getPostThreadOtherV2(#[Format('at-uri')] string $anchor, ?bool $prioritizeFollowedUsers = null);

    /**
     * (NOTE: this endpoint is under development and WILL change without notice. Don't use it until it is moved out of `unspecced` or your application WILL break) Get posts in a thread. It is based in an anchor post at any depth of the tree, and returns posts above it (recursively resolving the parent, without further branching to their replies) and below it (recursive replies, with branching to their replies). Does not require auth, but additional metadata and filtering will be applied for authed requests.
     *
     * @return array{thread: array{uri: string, depth: int, value: array}[], threadgate: array{uri: string, cid: string, record: mixed, lists: array}, hasOtherReplies: bool}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-post-thread-v2
     */
    #[Get, NSID(self::getPostThreadV2)]
    public function getPostThreadV2(#[Format('at-uri')] string $anchor, ?bool $above = null, ?int $below = 6, ?int $branchingFactor = 10, ?bool $prioritizeFollowedUsers = null, #[KnownValues(['newest', 'oldest', 'top'])] ?string $sort = 'oldest');

    /**
     * Get a list of suggested feeds.
     *
     * @return array{feeds: array{uri: string, cid: string, did: string, creator: array, displayName: string, description: string, descriptionFacets: array, avatar: string, likeCount: int, acceptsInteractions: bool, labels: array, viewer: array, contentMode: string, indexedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-feeds
     */
    #[Get, NSID(self::getSuggestedFeeds)]
    public function getSuggestedFeeds(?int $limit = 10);

    /**
     * Get a skeleton of suggested feeds. Intended to be called and hydrated by app.bsky.unspecced.getSuggestedFeeds.
     *
     * @return array{feeds: array}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-feeds-skeleton
     */
    #[Get, NSID(self::getSuggestedFeedsSkeleton)]
    public function getSuggestedFeedsSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Get a list of suggested starterpacks.
     *
     * @return array{starterPacks: array{uri: string, cid: string, record: mixed, creator: array, list: array, listItemsSample: array, feeds: array, joinedWeekCount: int, joinedAllTimeCount: int, labels: array, indexedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-starter-packs
     */
    #[Get, NSID(self::getSuggestedStarterPacks)]
    public function getSuggestedStarterPacks(?int $limit = 10);

    /**
     * Get a skeleton of suggested starterpacks. Intended to be called and hydrated by app.bsky.unspecced.getSuggestedStarterpacks.
     *
     * @return array{starterPacks: array}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-starter-packs-skeleton
     */
    #[Get, NSID(self::getSuggestedStarterPacksSkeleton)]
    public function getSuggestedStarterPacksSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Get a list of suggested users.
     *
     * @return array{actors: array{did: string, handle: string, displayName: string, pronouns: string, description: string, avatar: string, associated: array, indexedAt: string, createdAt: string, viewer: array, labels: array, verification: array, status: array, debug: mixed}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-users
     */
    #[Get, NSID(self::getSuggestedUsers)]
    public function getSuggestedUsers(?string $category = null, ?int $limit = 25);

    /**
     * Get a skeleton of suggested users. Intended to be called and hydrated by app.bsky.unspecced.getSuggestedUsers.
     *
     * @return array{dids: array}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggested-users-skeleton
     */
    #[Get, NSID(self::getSuggestedUsersSkeleton)]
    public function getSuggestedUsersSkeleton(#[Format('did')] ?string $viewer = null, ?string $category = null, ?int $limit = 25);

    /**
     * Get a skeleton of suggested actors. Intended to be called and then hydrated through app.bsky.actor.getSuggestions.
     *
     * @return array{cursor: string, actors: array{did: string}[], relativeToDid: string, recId: int}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggestions-skeleton
     */
    #[Get, NSID(self::getSuggestionsSkeleton)]
    public function getSuggestionsSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 50, ?string $cursor = null, #[Format('did')] ?string $relativeToDid = null);

    /**
     * Get a list of suggestions (feeds and users) tagged with categories.
     *
     * @return array{suggestions: array{tag: string, subjectType: string, subject: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-tagged-suggestions
     */
    #[Get, NSID(self::getTaggedSuggestions)]
    public function getTaggedSuggestions();

    /**
     * Get a list of trending topics.
     *
     * @return array{topics: array{topic: string, displayName: string, description: string, link: string}[], suggested: array{topic: string, displayName: string, description: string, link: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-trending-topics
     */
    #[Get, NSID(self::getTrendingTopics)]
    public function getTrendingTopics(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Get the current trends on the network.
     *
     * @return array{trends: array{topic: string, displayName: string, link: string, startedAt: string, postCount: int, status: string, category: string, actors: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-trends
     */
    #[Get, NSID(self::getTrends)]
    public function getTrends(?int $limit = 10);

    /**
     * Get the skeleton of trends on the network. Intended to be called and then hydrated through app.bsky.unspecced.getTrends.
     *
     * @return array{trends: array{topic: string, displayName: string, link: string, startedAt: string, postCount: int, status: string, category: string, dids: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-get-trends-skeleton
     */
    #[Get, NSID(self::getTrendsSkeleton)]
    public function getTrendsSkeleton(#[Format('did')] ?string $viewer = null, ?int $limit = 10);

    /**
     * Initiate age assurance for an account. This is a one-time action that will start the process of verifying the user's age.
     *
     * @return array{lastInitiatedAt: string, status: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-init-age-assurance
     */
    #[Post, NSID(self::initAgeAssurance)]
    public function initAgeAssurance(string $email, string $language, string $countryCode);

    /**
     * Backend Actors (profile) search, returns only skeleton.
     *
     * @return array{cursor: string, hitsTotal: int, actors: array{did: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-search-actors-skeleton
     */
    #[Get, NSID(self::searchActorsSkeleton)]
    public function searchActorsSkeleton(string $q, #[Format('did')] ?string $viewer = null, ?bool $typeahead = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Backend Posts search, returns only skeleton.
     *
     * @return array{cursor: string, hitsTotal: int, posts: array{uri: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-search-posts-skeleton
     */
    #[Get, NSID(self::searchPostsSkeleton)]
    public function searchPostsSkeleton(string $q, #[KnownValues(['top', 'latest'])] ?string $sort = 'latest', ?string $since = null, ?string $until = null, #[Format('at-identifier')] ?string $mentions = null, #[Format('at-identifier')] ?string $author = null, #[Format('language')] ?string $lang = null, ?string $domain = null, #[Format('uri')] ?string $url = null, ?array $tag = null, #[Format('did')] ?string $viewer = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Backend Starter Pack search, returns only skeleton.
     *
     * @return array{cursor: string, hitsTotal: int, starterPacks: array{uri: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-unspecced-search-starter-packs-skeleton
     */
    #[Get, NSID(self::searchStarterPacksSkeleton)]
    public function searchStarterPacksSkeleton(string $q, #[Format('did')] ?string $viewer = null, ?int $limit = 25, ?string $cursor = null);
}
