<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Lexicon
{
    public const resolveLexicon = 'com.atproto.lexicon.resolveLexicon';

    /**
     * Resolves an atproto lexicon (NSID) to a schema.
     *
     * @return array{cid: string, schema: mixed, uri: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-lexicon-resolve-lexicon
     */
    #[Get, NSID(self::resolveLexicon)]
    public function resolveLexicon(#[Format('nsid')] string $nsid);
}
