<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

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
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-config
     */
    #[Get, NSID(self::getConfig)]
    public function getConfig();

    /**
     * An unspecced view of globally popular feed generators.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-popular-feed-generators
     */
    #[Get, NSID(self::getPopularFeedGenerators)]
    public function getPopularFeedGenerators(?int $limit = 50, ?string $cursor = null, ?string $query = null);

    /**
     * Get a skeleton of suggested actors. Intended to be called and then hydrated through app.bsky.actor.getSuggestions.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-suggestions-skeleton
     */
    #[Get, NSID(self::getSuggestionsSkeleton)]
    public function getSuggestionsSkeleton(?string $viewer = null, ?int $limit = 50, ?string $cursor = null, ?string $relativeToDid = null);

    /**
     * Get a list of suggestions (feeds and users) tagged with categories.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-get-tagged-suggestions
     */
    #[Get, NSID(self::getTaggedSuggestions)]
    public function getTaggedSuggestions();

    /**
     * Backend Actors (profile) search, returns only skeleton.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-search-actors-skeleton
     */
    #[Get, NSID(self::searchActorsSkeleton)]
    public function searchActorsSkeleton(string $q, ?string $viewer = null, ?bool $typeahead = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Backend Posts search, returns only skeleton.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-unspecced-search-posts-skeleton
     */
    #[Get, NSID(self::searchPostsSkeleton)]
    public function searchPostsSkeleton(string $q, ?string $sort = 'latest', ?string $since = null, ?string $until = null, ?string $mentions = null, ?string $author = null, ?string $lang = null, ?string $domain = null, ?string $url = null, ?array $tag = null, ?string $viewer = null, ?int $limit = 25, ?string $cursor = null);
}
