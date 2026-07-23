<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Embed
{
    public const getEmbedExternalView = 'app.bsky.embed.getEmbedExternalView';

    /**
     * Resolve one or more AT-URIs into the data needed to render an enhanced external embed. Returns `associatedRefs` (strongRefs to embed into a post's external.associatedRefs), the raw `associatedRecords`, and a hydrated `view`. The response is empty (`{}`) when no records were resolvable, or when validation determined the resolved records don't actually back the requested URL; clients should fall back to their own link-card rendering in that case and skip writing strongRefs to the post.
     *
     * @return array{view: array{external: array}, associatedRefs: array{uri: string, cid: string}[], associatedRecords: array}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-embed-get-embed-external-view
     */
    #[Get, NSID(self::getEmbedExternalView)]
    public function getEmbedExternalView(#[Format('uri')] string $url, #[Format('at-uri')] array $uris);
}
