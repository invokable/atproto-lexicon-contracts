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
     * Resolve one AT-URI record into the data needed to render an enhanced external embed. The records are validated against the requested `url` before any view is built. When validation passes, returns `data`, `associatedRefs` (strongRefs to embed into a post's external.associatedRefs) and the raw `associatedRecords`, plus a legacy `view` for Standard.site records only. When validation fails, only `unverifiedAssociatedRefs` and `unverifiedAssociatedRecords` are returned and no view or data is built. The response is empty (`{}`) when no record URI was usable or the record could not be resolved; clients should fall back to their own link-card rendering in that case and skip writing strongRefs to the post.
     *
     * @return array{view: array{external: array}, data: array, associatedRefs: array{}[], associatedRecords: array, unverifiedAssociatedRefs: array{}[], unverifiedAssociatedRecords: array}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-embed-get-embed-external-view
     */
    #[Get, NSID(self::getEmbedExternalView)]
    public function getEmbedExternalView(#[Format('uri')] string $url, #[Format('at-uri')] ?string $canonicalUri = null, #[Format('at-uri')] ?array $uris = null);
}
