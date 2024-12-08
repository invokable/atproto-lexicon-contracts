<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;

interface Label
{
    public const queryLabels = 'com.atproto.label.queryLabels';

    public const queryLabelsResponse = ['cursor' => 'string', 'labels' => [['ver' => 'int', 'src' => 'string', 'uri' => 'string', 'cid' => 'string', 'val' => 'string', 'neg' => 'bool', 'cts' => 'string', 'exp' => 'string', 'sig' => 'mixed']]];

    /**
     * Find labels relevant to the provided AT-URI patterns. Public endpoint for moderation services, though may return different or additional results with auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-label-query-labels
     */
    #[Get, NSID(self::queryLabels)]
    #[Output(self::queryLabelsResponse)]
    public function queryLabels(array $uriPatterns, #[Format('did')] ?array $sources = null, ?int $limit = 50, ?string $cursor = null);
}
