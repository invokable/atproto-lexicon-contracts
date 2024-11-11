<?php

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
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

    protected function get(string $xrpc, array $query = []): array
    {
        $response = $this->client()->get($xrpc, [
            RequestOptions::QUERY => $query,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getProfile(#[Format('at-identifier')] string $actor): array
    {
        return $this->get(self::getProfile, compact('actor'));
    }

    public function getAuthorFeed(#[Format('at-identifier')] string $actor, ?int $limit = 50, ?string $cursor = null, #[KnownValues(['posts_with_replies', 'posts_no_replies', 'posts_with_media', 'posts_and_author_threads'])] ?string $filter = 'posts_with_replies', ?bool $includePins = null): array
    {
        return $this->get(
            self::getAuthorFeed,
            compact('actor', 'limit', 'cursor', 'filter', 'includePins'),
        );
    }

    public function searchPosts(string $q, #[KnownValues(['top', 'latest'])] ?string $sort = 'latest', ?string $since = null, ?string $until = null, #[Format('at-identifier')] ?string $mentions = null, #[Format('at-identifier')] ?string $author = null, #[Format('language')] ?string $lang = null, ?string $domain = null, #[Format('uri')] ?string $url = null, ?array $tag = null, ?int $limit = 25, ?string $cursor = null): array
    {
        return $this->get(
            self::searchPosts,
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

    // Methods that you do not use can be left unimplemented.

    #[Get, NSID(self::getPreferences)]
    public function getPreferences()
    {
        // TODO: Implement getPreferences() method.
    }

    #[Get, NSID(self::getProfiles)]
    public function getProfiles(#[Format('at-identifier')] array $actors)
    {
        // TODO: Implement getProfiles() method.
    }

    #[Get, NSID(self::getSuggestions)]
    public function getSuggestions(?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getSuggestions() method.
    }

    #[Post, NSID(self::putPreferences)]
    public function putPreferences(#[Ref('app.bsky.actor.defs#preferences')] array $preferences)
    {
        // TODO: Implement putPreferences() method.
    }

    #[Get, NSID(self::searchActors)]
    public function searchActors(?string $term = null, ?string $q = null, ?int $limit = 25, ?string $cursor = null)
    {
        // TODO: Implement searchActors() method.
    }

    #[Get, NSID(self::searchActorsTypeahead)]
    public function searchActorsTypeahead(?string $term = null, ?string $q = null, ?int $limit = 10)
    {
        // TODO: Implement searchActorsTypeahead() method.
    }

    #[Get, NSID(self::describeFeedGenerator)]
    public function describeFeedGenerator()
    {
        // TODO: Implement describeFeedGenerator() method.
    }

    #[Get, NSID(self::getActorFeeds)]
    public function getActorFeeds(#[Format('at-identifier')] string $actor, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getActorFeeds() method.
    }

    #[Get, NSID(self::getActorLikes)]
    public function getActorLikes(#[Format('at-identifier')] string $actor, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getActorLikes() method.
    }

    #[Get, NSID(self::getFeed)]
    public function getFeed(#[Format('at-uri')] string $feed, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getFeed() method.
    }

    #[Get, NSID(self::getFeedGenerator)]
    public function getFeedGenerator(#[Format('at-uri')] string $feed)
    {
        // TODO: Implement getFeedGenerator() method.
    }

    #[Get, NSID(self::getFeedGenerators)]
    public function getFeedGenerators(#[Format('at-uri')] array $feeds)
    {
        // TODO: Implement getFeedGenerators() method.
    }

    #[Get, NSID(self::getFeedSkeleton)]
    public function getFeedSkeleton(#[Format('at-uri')] string $feed, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getFeedSkeleton() method.
    }

    #[Get, NSID(self::getLikes)]
    public function getLikes(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getLikes() method.
    }

    #[Get, NSID(self::getListFeed)]
    public function getListFeed(#[Format('at-uri')] string $list, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getListFeed() method.
    }

    #[Get, NSID(self::getPostThread)]
    public function getPostThread(#[Format('at-uri')] string $uri, ?int $depth = 6, ?int $parentHeight = 80)
    {
        // TODO: Implement getPostThread() method.
    }

    #[Get, NSID(self::getPosts)]
    public function getPosts(#[Format('at-uri')] array $uris)
    {
        // TODO: Implement getPosts() method.
    }

    #[Get, NSID(self::getQuotes)]
    public function getQuotes(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getQuotes() method.
    }

    #[Get, NSID(self::getRepostedBy)]
    public function getRepostedBy(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getRepostedBy() method.
    }

    #[Get, NSID(self::getSuggestedFeeds)]
    public function getSuggestedFeeds(?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getSuggestedFeeds() method.
    }

    #[Get, NSID(self::getTimeline)]
    public function getTimeline(?string $algorithm = null, ?int $limit = 50, ?string $cursor = null)
    {
        // TODO: Implement getTimeline() method.
    }

    #[Post, NSID(self::sendInteractions)]
    public function sendInteractions(#[Ref('app.bsky.feed.defs#interaction')] array $interactions)
    {
        // TODO: Implement sendInteractions() method.
    }
}
