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
    public const getSuggestionsSkeleton = 'app.bsky.unspecced.getSuggestionsSkeleton';
    public const getTaggedSuggestions = 'app.bsky.unspecced.getTaggedSuggestions';
    public const getTrendingTopics = 'app.bsky.unspecced.getTrendingTopics';
    public const searchActorsSkeleton = 'app.bsky.unspecced.searchActorsSkeleton';
    public const searchPostsSkeleton = 'app.bsky.unspecced.searchPostsSkeleton';
    public const searchStarterPacksSkeleton = 'app.bsky.unspecced.searchStarterPacksSkeleton';

    public const getConfigResponse = ['checkEmailConfirmed' => 'bool'];
    public const getPopularFeedGeneratorsResponse = ['cursor' => 'string', 'feeds' => [['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'indexedAt' => 'string']]];
    public const getSuggestionsSkeletonResponse = ['cursor' => 'string', 'actors' => [['did' => 'string']], 'relativeToDid' => 'string', 'recId' => 'int'];
    public const getTaggedSuggestionsResponse = ['suggestions' => [['tag' => 'string', 'subjectType' => 'string', 'subject' => 'string']]];
    public const getTrendingTopicsResponse = ['topics' => [['topic' => 'string', 'displayName' => 'string', 'description' => 'string', 'link' => 'string']], 'suggested' => [['topic' => 'string', 'displayName' => 'string', 'description' => 'string', 'link' => 'string']]];
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
