<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Bookmark
{
    public const createBookmark = 'app.bsky.bookmark.createBookmark';
    public const deleteBookmark = 'app.bsky.bookmark.deleteBookmark';
    public const getBookmarks = 'app.bsky.bookmark.getBookmarks';

    /**
     * Creates a private bookmark for the specified record. Currently, only `app.bsky.feed.post` records are supported. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-bookmark-create-bookmark
     */
    #[Post, NSID(self::createBookmark)]
    public function createBookmark(#[Format('at-uri')] string $uri, #[Format('cid')] string $cid);

    /**
     * Deletes a private bookmark for the specified record. Currently, only `app.bsky.feed.post` records are supported. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-bookmark-delete-bookmark
     */
    #[Post, NSID(self::deleteBookmark)]
    public function deleteBookmark(#[Format('at-uri')] string $uri);

    /**
     * Gets views of records bookmarked by the authenticated user. Requires authentication.
     *
     * @return array{cursor: string, bookmarks: array{subject: array, createdAt: string, item: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-bookmark-get-bookmarks
     */
    #[Get, NSID(self::getBookmarks)]
    public function getBookmarks(?int $limit = 50, ?string $cursor = null);
}
