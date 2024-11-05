<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

interface Feed
{
    public const describeFeedGenerator = 'app.bsky.feed.describeFeedGenerator';
    public const getActorFeeds = 'app.bsky.feed.getActorFeeds';
    public const getActorLikes = 'app.bsky.feed.getActorLikes';
    public const getAuthorFeed = 'app.bsky.feed.getAuthorFeed';
    public const getFeed = 'app.bsky.feed.getFeed';
    public const getFeedGenerator = 'app.bsky.feed.getFeedGenerator';
    public const getFeedGenerators = 'app.bsky.feed.getFeedGenerators';
    public const getFeedSkeleton = 'app.bsky.feed.getFeedSkeleton';
    public const getLikes = 'app.bsky.feed.getLikes';
    public const getListFeed = 'app.bsky.feed.getListFeed';
    public const getPostThread = 'app.bsky.feed.getPostThread';
    public const getPosts = 'app.bsky.feed.getPosts';
    public const getQuotes = 'app.bsky.feed.getQuotes';
    public const getRepostedBy = 'app.bsky.feed.getRepostedBy';
    public const getSuggestedFeeds = 'app.bsky.feed.getSuggestedFeeds';
    public const getTimeline = 'app.bsky.feed.getTimeline';
    public const searchPosts = 'app.bsky.feed.searchPosts';
    public const sendInteractions = 'app.bsky.feed.sendInteractions';

    /**
     * Get information about a feed generator, including policies and offered feed URIs. Does not require auth; implemented by Feed Generator services (not App View).
     *
     * ```
     * GET app.bsky.feed.describeFeedGenerator
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-describe-feed-generator
     */
    public function describeFeedGenerator();

    /**
     * Get a list of feeds (feed generator records) created by the actor (in the actor's repo).
     *
     * ```
     * GET app.bsky.feed.getActorFeeds
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-actor-feeds
     */
    public function getActorFeeds(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a list of posts liked by an actor. Requires auth, actor must be the requesting account.
     *
     * ```
     * GET app.bsky.feed.getActorLikes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-actor-likes
     */
    public function getActorLikes(string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a view of an actor's 'author feed' (post and reposts by the author). Does not require auth.
     *
     * ```
     * GET app.bsky.feed.getAuthorFeed
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-author-feed
     */
    public function getAuthorFeed(string $actor, ?int $limit = 50, ?string $cursor = null, ?string $filter = 'posts_with_replies', ?bool $includePins = null);

    /**
     * Get a hydrated feed from an actor's selected feed generator. Implemented by App View.
     *
     * ```
     * GET app.bsky.feed.getFeed
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-feed
     */
    public function getFeed(string $feed, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get information about a feed generator. Implemented by AppView.
     *
     * ```
     * GET app.bsky.feed.getFeedGenerator
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-feed-generator
     */
    public function getFeedGenerator(string $feed);

    /**
     * Get information about a list of feed generators.
     *
     * ```
     * GET app.bsky.feed.getFeedGenerators
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-feed-generators
     */
    public function getFeedGenerators(array $feeds);

    /**
     * Get a skeleton of a feed provided by a feed generator. Auth is optional, depending on provider requirements, and provides the DID of the requester. Implemented by Feed Generator Service.
     *
     * ```
     * GET app.bsky.feed.getFeedSkeleton
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-feed-skeleton
     */
    public function getFeedSkeleton(string $feed, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get like records which reference a subject (by AT-URI and CID).
     *
     * ```
     * GET app.bsky.feed.getLikes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-likes
     */
    public function getLikes(string $uri, ?string $cid = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a feed of recent posts from a list (posts and reposts from any actors on the list). Does not require auth.
     *
     * ```
     * GET app.bsky.feed.getListFeed
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-list-feed
     */
    public function getListFeed(string $list, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get posts in a thread. Does not require auth, but additional metadata and filtering will be applied for authed requests.
     *
     * ```
     * GET app.bsky.feed.getPostThread
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-post-thread
     */
    public function getPostThread(string $uri, ?int $depth = 6, ?int $parentHeight = 80);

    /**
     * Gets post views for a specified list of posts (by AT-URI). This is sometimes referred to as 'hydrating' a 'feed skeleton'.
     *
     * ```
     * GET app.bsky.feed.getPosts
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-posts
     */
    public function getPosts(array $uris);

    /**
     * Get a list of quotes for a given post.
     *
     * ```
     * GET app.bsky.feed.getQuotes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-quotes
     */
    public function getQuotes(string $uri, ?string $cid = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a list of reposts for a given post.
     *
     * ```
     * GET app.bsky.feed.getRepostedBy
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-reposted-by
     */
    public function getRepostedBy(string $uri, ?string $cid = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a list of suggested feeds (feed generators) for the requesting account.
     *
     * ```
     * GET app.bsky.feed.getSuggestedFeeds
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-suggested-feeds
     */
    public function getSuggestedFeeds(?int $limit = 50, ?string $cursor = null);

    /**
     * Get a view of the requesting account's home timeline. This is expected to be some form of reverse-chronological feed.
     *
     * ```
     * GET app.bsky.feed.getTimeline
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-get-timeline
     */
    public function getTimeline(?string $algorithm = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Find posts matching search criteria, returning views of those posts.
     *
     * ```
     * GET app.bsky.feed.searchPosts
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-search-posts
     */
    public function searchPosts(string $q, ?string $sort = 'latest', ?string $since = null, ?string $until = null, ?string $mentions = null, ?string $author = null, ?string $lang = null, ?string $domain = null, ?string $url = null, ?array $tag = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Send information about interactions with feed items back to the feed generator that served them.
     *
     * ```
     * POST app.bsky.feed.sendInteractions
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-feed-send-interactions
     */
    public function sendInteractions(array $interactions);
}
