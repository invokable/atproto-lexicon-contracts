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
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

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

    public const describeFeedGeneratorResponse = ['did' => 'string', 'feeds' => [['uri' => 'string']], 'links' => ['privacyPolicy' => 'string', 'termsOfService' => 'string']];
    public const getActorFeedsResponse = ['cursor' => 'string', 'feeds' => [['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'contentMode' => 'string', 'indexedAt' => 'string']]];
    public const getActorLikesResponse = ['cursor' => 'string', 'feed' => [['post' => 'array', 'reply' => 'array', 'reason' => 'array', 'feedContext' => 'string']]];
    public const getAuthorFeedResponse = ['cursor' => 'string', 'feed' => [['post' => 'array', 'reply' => 'array', 'reason' => 'array', 'feedContext' => 'string']]];
    public const getFeedResponse = ['cursor' => 'string', 'feed' => [['post' => 'array', 'reply' => 'array', 'reason' => 'array', 'feedContext' => 'string']]];
    public const getFeedGeneratorResponse = ['view' => ['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'contentMode' => 'string', 'indexedAt' => 'string'], 'isOnline' => 'bool', 'isValid' => 'bool'];
    public const getFeedGeneratorsResponse = ['feeds' => [['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'contentMode' => 'string', 'indexedAt' => 'string']]];
    public const getFeedSkeletonResponse = ['cursor' => 'string', 'feed' => [['post' => 'string', 'reason' => 'array', 'feedContext' => 'string']]];
    public const getLikesResponse = ['uri' => 'string', 'cid' => 'string', 'cursor' => 'string', 'likes' => [['indexedAt' => 'string', 'createdAt' => 'string', 'actor' => 'array']]];
    public const getListFeedResponse = ['cursor' => 'string', 'feed' => [['post' => 'array', 'reply' => 'array', 'reason' => 'array', 'feedContext' => 'string']]];
    public const getPostThreadResponse = ['thread' => 'array', 'threadgate' => ['uri' => 'string', 'cid' => 'string', 'record' => 'mixed', 'lists' => 'array']];
    public const getPostsResponse = ['posts' => [['uri' => 'string', 'cid' => 'string', 'author' => 'array', 'record' => 'mixed', 'embed' => 'array', 'replyCount' => 'int', 'repostCount' => 'int', 'likeCount' => 'int', 'quoteCount' => 'int', 'indexedAt' => 'string', 'viewer' => 'array', 'labels' => 'array', 'threadgate' => 'array']]];
    public const getQuotesResponse = ['uri' => 'string', 'cid' => 'string', 'cursor' => 'string', 'posts' => [['uri' => 'string', 'cid' => 'string', 'author' => 'array', 'record' => 'mixed', 'embed' => 'array', 'replyCount' => 'int', 'repostCount' => 'int', 'likeCount' => 'int', 'quoteCount' => 'int', 'indexedAt' => 'string', 'viewer' => 'array', 'labels' => 'array', 'threadgate' => 'array']]];
    public const getRepostedByResponse = ['uri' => 'string', 'cid' => 'string', 'cursor' => 'string', 'repostedBy' => [['did' => 'string', 'handle' => 'string', 'displayName' => 'string', 'description' => 'string', 'avatar' => 'string', 'associated' => 'array', 'indexedAt' => 'string', 'createdAt' => 'string', 'viewer' => 'array', 'labels' => 'array']]];
    public const getSuggestedFeedsResponse = ['cursor' => 'string', 'feeds' => [['uri' => 'string', 'cid' => 'string', 'did' => 'string', 'creator' => 'array', 'displayName' => 'string', 'description' => 'string', 'descriptionFacets' => 'array', 'avatar' => 'string', 'likeCount' => 'int', 'acceptsInteractions' => 'bool', 'labels' => 'array', 'viewer' => 'array', 'contentMode' => 'string', 'indexedAt' => 'string']]];
    public const getTimelineResponse = ['cursor' => 'string', 'feed' => [['post' => 'array', 'reply' => 'array', 'reason' => 'array', 'feedContext' => 'string']]];
    public const searchPostsResponse = ['cursor' => 'string', 'hitsTotal' => 'int', 'posts' => [['uri' => 'string', 'cid' => 'string', 'author' => 'array', 'record' => 'mixed', 'embed' => 'array', 'replyCount' => 'int', 'repostCount' => 'int', 'likeCount' => 'int', 'quoteCount' => 'int', 'indexedAt' => 'string', 'viewer' => 'array', 'labels' => 'array', 'threadgate' => 'array']]];

    /**
     * Get information about a feed generator, including policies and offered feed URIs. Does not require auth; implemented by Feed Generator services (not App View).
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-describe-feed-generator
     */
    #[Get, NSID(self::describeFeedGenerator)]
    #[Output(self::describeFeedGeneratorResponse)]
    public function describeFeedGenerator();

    /**
     * Get a list of feeds (feed generator records) created by the actor (in the actor's repo).
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-actor-feeds
     */
    #[Get, NSID(self::getActorFeeds)]
    #[Output(self::getActorFeedsResponse)]
    public function getActorFeeds(#[Format('at-identifier')] string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a list of posts liked by an actor. Requires auth, actor must be the requesting account.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-actor-likes
     */
    #[Get, NSID(self::getActorLikes)]
    #[Output(self::getActorLikesResponse)]
    public function getActorLikes(#[Format('at-identifier')] string $actor, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a view of an actor's 'author feed' (post and reposts by the author). Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-author-feed
     */
    #[Get, NSID(self::getAuthorFeed)]
    #[Output(self::getAuthorFeedResponse)]
    public function getAuthorFeed(#[Format('at-identifier')] string $actor, ?int $limit = 50, ?string $cursor = null, #[KnownValues(['posts_with_replies', 'posts_no_replies', 'posts_with_media', 'posts_and_author_threads', 'posts_with_video'])] ?string $filter = 'posts_with_replies', ?bool $includePins = null);

    /**
     * Get a hydrated feed from an actor's selected feed generator. Implemented by App View.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-feed
     */
    #[Get, NSID(self::getFeed)]
    #[Output(self::getFeedResponse)]
    public function getFeed(#[Format('at-uri')] string $feed, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get information about a feed generator. Implemented by AppView.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-feed-generator
     */
    #[Get, NSID(self::getFeedGenerator)]
    #[Output(self::getFeedGeneratorResponse)]
    public function getFeedGenerator(#[Format('at-uri')] string $feed);

    /**
     * Get information about a list of feed generators.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-feed-generators
     */
    #[Get, NSID(self::getFeedGenerators)]
    #[Output(self::getFeedGeneratorsResponse)]
    public function getFeedGenerators(#[Format('at-uri')] array $feeds);

    /**
     * Get a skeleton of a feed provided by a feed generator. Auth is optional, depending on provider requirements, and provides the DID of the requester. Implemented by Feed Generator Service.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-feed-skeleton
     */
    #[Get, NSID(self::getFeedSkeleton)]
    #[Output(self::getFeedSkeletonResponse)]
    public function getFeedSkeleton(#[Format('at-uri')] string $feed, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get like records which reference a subject (by AT-URI and CID).
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-likes
     */
    #[Get, NSID(self::getLikes)]
    #[Output(self::getLikesResponse)]
    public function getLikes(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a feed of recent posts from a list (posts and reposts from any actors on the list). Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-list-feed
     */
    #[Get, NSID(self::getListFeed)]
    #[Output(self::getListFeedResponse)]
    public function getListFeed(#[Format('at-uri')] string $list, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get posts in a thread. Does not require auth, but additional metadata and filtering will be applied for authed requests.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-post-thread
     */
    #[Get, NSID(self::getPostThread)]
    #[Output(self::getPostThreadResponse)]
    public function getPostThread(#[Format('at-uri')] string $uri, ?int $depth = 6, ?int $parentHeight = 80);

    /**
     * Gets post views for a specified list of posts (by AT-URI). This is sometimes referred to as 'hydrating' a 'feed skeleton'.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-posts
     */
    #[Get, NSID(self::getPosts)]
    #[Output(self::getPostsResponse)]
    public function getPosts(#[Format('at-uri')] array $uris);

    /**
     * Get a list of quotes for a given post.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-quotes
     */
    #[Get, NSID(self::getQuotes)]
    #[Output(self::getQuotesResponse)]
    public function getQuotes(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a list of reposts for a given post.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-reposted-by
     */
    #[Get, NSID(self::getRepostedBy)]
    #[Output(self::getRepostedByResponse)]
    public function getRepostedBy(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get a list of suggested feeds (feed generators) for the requesting account.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-suggested-feeds
     */
    #[Get, NSID(self::getSuggestedFeeds)]
    #[Output(self::getSuggestedFeedsResponse)]
    public function getSuggestedFeeds(?int $limit = 50, ?string $cursor = null);

    /**
     * Get a view of the requesting account's home timeline. This is expected to be some form of reverse-chronological feed.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-get-timeline
     */
    #[Get, NSID(self::getTimeline)]
    #[Output(self::getTimelineResponse)]
    public function getTimeline(?string $algorithm = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Find posts matching search criteria, returning views of those posts.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-search-posts
     */
    #[Get, NSID(self::searchPosts)]
    #[Output(self::searchPostsResponse)]
    public function searchPosts(string $q, #[KnownValues(['top', 'latest'])] ?string $sort = 'latest', ?string $since = null, ?string $until = null, #[Format('at-identifier')] ?string $mentions = null, #[Format('at-identifier')] ?string $author = null, #[Format('language')] ?string $lang = null, ?string $domain = null, #[Format('uri')] ?string $url = null, ?array $tag = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Send information about interactions with feed items back to the feed generator that served them.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-feed-send-interactions
     */
    #[Post, NSID(self::sendInteractions)]
    public function sendInteractions(#[Ref('app.bsky.feed.defs#interaction')] array $interactions);
}
