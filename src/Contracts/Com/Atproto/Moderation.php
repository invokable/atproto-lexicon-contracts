<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Moderation
{
    public const createReport = 'com.atproto.moderation.createReport';

    /**
     * Submit a moderation report regarding an atproto account or record. Implemented by moderation services (with PDS proxying), and requires auth.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-moderation-create-report
     */
    #[Post, NSID(self::createReport)]
    public function createReport(#[Ref('com.atproto.moderation.defs#reasonType')] string $reasonType, #[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, ?string $reason = null);
}
