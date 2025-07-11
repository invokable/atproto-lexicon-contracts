<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Label
{
    public const queryLabels = 'com.atproto.label.queryLabels';

    /**
     * Find labels relevant to the provided AT-URI patterns. Public endpoint for moderation services, though may return different or additional results with auth.
     *
     * @return array{cursor: string, labels: array{ver: int, src: string, uri: string, cid: string, val: string, neg: bool, cts: string, exp: string, sig: mixed}[]}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-label-query-labels
     */
    #[Get, NSID(self::queryLabels)]
    public function queryLabels(array $uriPatterns, #[Format('did')] ?array $sources = null, ?int $limit = 50, ?string $cursor = null);
}
