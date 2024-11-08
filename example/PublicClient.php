<?php

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Revolution\AtProto\Lexicon\Contracts\App\Bsky\Actor;
use Revolution\AtProto\Lexicon\Contracts\App\Bsky\Feed;

/**
 * A client that does not require authentication and only uses public APIs.
 *
 * ```
 * $client = new PublicClient();
 *
 * $posts = $client->searchPosts(q: '#bleusky', tag: ['bluesky'], limit: 10);
 * ```
 */
class PublicClient implements Actor, Feed
{
    protected const PUBLIC_ENDPOINT = 'https://public.api.bsky.app/xrpc/';

    protected Client $client;

    protected function client(): Client
    {
        return $this->client ?? new Client([
            'base_uri' => self::PUBLIC_ENDPOINT,
            'timeout' => 30,
        ]);
    }

    protected function get(string $api, array $query = []): array
    {
        $response = $this->client()->get($api, [
            RequestOptions::QUERY => $query,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getPreferences()
    {
        // TODO: Implement getPreferences() method.
    }

    public function getProfile(string $actor): array
    {
        return $this->get(Actor::getProfile, compact('actor'));
    }

    public function getProfiles(array $actors)
    {
        // TODO: Implement getProfiles() method.
    }

    public function getSuggestions(?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getSuggestions() method.
    }

    public function putPreferences(array $preferences)
    {
        // TODO: Implement putPreferences() method.
    }

    public function searchActors(?string $term = null, ?string $q = null, ?int $limit = 25, ?string $cursor = null)
    {
        // TODO: Implement searchActors() method.
    }

    public function searchActorsTypeahead(?string $term = null, ?string $q = null, ?int $limit = 10)
    {
        // TODO: Implement searchActorsTypeahead() method.
    }

    public function describeFeedGenerator()
    {
        // TODO: Implement describeFeedGenerator() method.
    }

    public function getActorFeeds(string $actor, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getActorFeeds() method.
    }

    public function getActorLikes(string $actor, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getActorLikes() method.
    }

    public function getAuthorFeed(string $actor, ?int $limit = 50, ?string $cursor = null, ?string $filter = 'posts_with_replies', ?bool $includePins = null): array
    {
        return $this->get(Feed::getAuthorFeed, compact('actor', 'limit', 'cursor', 'filter', 'includePins'));
    }

    public function getFeed(string $feed, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getFeed() method.
    }

    public function getFeedGenerator(string $feed)
    {
        // TODO: Implement getFeedGenerator() method.
    }

    public function getFeedGenerators(array $feeds)
    {
        // TODO: Implement getFeedGenerators() method.
    }

    public function getFeedSkeleton(string $feed, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getFeedSkeleton() method.
    }

    public function getLikes(string $uri, ?string $cid = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getLikes() method.
    }

    public function getListFeed(string $list, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getListFeed() method.
    }

    public function getPostThread(string $uri, ?int $depth = 6, ?int $parentHeight = 80)
    {
        // TODO: Implement getPostThread() method.
    }

    public function getPosts(array $uris)
    {
        // TODO: Implement getPosts() method.
    }

    public function getQuotes(string $uri, ?string $cid = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getQuotes() method.
    }

    public function getRepostedBy(string $uri, ?string $cid = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getRepostedBy() method.
    }

    public function getSuggestedFeeds(?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getSuggestedFeeds() method.
    }

    public function getTimeline(?string $algorithm = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getTimeline() method.
    }

    public function searchPosts(string $q, ?string $sort = 'latest', ?string $since = null, ?string $until = null, ?string $mentions = null, ?string $author = null, ?string $lang = null, ?string $domain = null, ?string $url = null, ?array $tag = null, ?int $limit = 25, ?string $cursor = null): array
    {
        return $this->get(
            Feed::searchPosts,
            compact(
                'q',
                'sort',
                'since',
                'until',
                'mentions',
                'author',
                'lang',
                'domain',
                'url',
                'tag',
                'limit',
                'cursor',
            ),
        );
    }

    public function sendInteractions(array $interactions)
    {
        // TODO: Implement sendInteractions() method.
    }
}
