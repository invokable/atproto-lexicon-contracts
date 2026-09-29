<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Inbox
{
    public const appealActionedSubject = 'tools.ozone.inbox.appealActionedSubject';

    /**
     * Appeal a moderation action affecting the user's account or content.
     *
     * @return array{src: string, subject: array, enforcement: mixed, appeal: mixed, availableActions: array, latestAction: mixed, actionCount: int, createdAt: string, updatedAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-appeal-actioned-subject
     */
    #[Post, NSID(self::appealActionedSubject)]
    public function appealActionedSubject(#[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, #[Union(['#actionRef', '#labelRef', '#takedownRef'])] ?array $action = null, ?string $reason = null, #[Ref('com.atproto.moderation.createReport#modTool')] ?array $modTool = null);
}
