<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

interface Moderation
{
    public const createReport = 'com.atproto.moderation.createReport';

    /**
     * Submit a moderation report regarding an atproto account or record. Implemented by moderation services (with PDS proxying), and requires auth.
     *
     * ```
     * POST com.atproto.moderation.createReport
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-moderation-create-report
     */
    public function createReport(string $reasonType, array $subject, ?string $reason = null);
}
