<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

interface Unspecced
{
    public const getConfig = 'app.bsky.unspecced.getConfig';
    public const getPopularFeedGenerators = 'app.bsky.unspecced.getPopularFeedGenerators';
    public const getSuggestionsSkeleton = 'app.bsky.unspecced.getSuggestionsSkeleton';
    public const getTaggedSuggestions = 'app.bsky.unspecced.getTaggedSuggestions';
    public const searchActorsSkeleton = 'app.bsky.unspecced.searchActorsSkeleton';
    public const searchPostsSkeleton = 'app.bsky.unspecced.searchPostsSkeleton';

    /**
     * Get miscellaneous runtime configuration.
     *
     * ```
     * GET app.bsky.unspecced.getConfig
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-config
     */
    public function getConfig();

    /**
     * An unspecced view of globally popular feed generators.
     *
     * ```
     * GET app.bsky.unspecced.getPopularFeedGenerators
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-popular-feed-generators
     */
    public function getPopularFeedGenerators(?int $limit = 50, ?string $cursor = null, ?string $query = null);

    /**
     * Get a skeleton of suggested actors. Intended to be called and then hydrated through app.bsky.actor.getSuggestions.
     *
     * ```
     * GET app.bsky.unspecced.getSuggestionsSkeleton
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggestions-skeleton
     */
    public function getSuggestionsSkeleton(?string $viewer = null, ?int $limit = 50, ?string $cursor = null, ?string $relativeToDid = null);

    /**
     * Get a list of suggestions (feeds and users) tagged with categories.
     *
     * ```
     * GET app.bsky.unspecced.getTaggedSuggestions
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-tagged-suggestions
     */
    public function getTaggedSuggestions();

    /**
     * Backend Actors (profile) search, returns only skeleton.
     *
     * ```
     * GET app.bsky.unspecced.searchActorsSkeleton
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-search-actors-skeleton
     */
    public function searchActorsSkeleton(string $q, ?string $viewer = null, ?bool $typeahead = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Backend Posts search, returns only skeleton.
     *
     * ```
     * GET app.bsky.unspecced.searchPostsSkeleton
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-search-posts-skeleton
     */
    public function searchPostsSkeleton(string $q, ?string $sort = 'latest', ?string $since = null, ?string $until = null, ?string $mentions = null, ?string $author = null, ?string $lang = null, ?string $domain = null, ?string $url = null, ?array $tag = null, ?string $viewer = null, ?int $limit = 25, ?string $cursor = null);
}
