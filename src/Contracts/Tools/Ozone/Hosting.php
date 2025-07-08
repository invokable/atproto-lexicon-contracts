<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Hosting
{
    public const getAccountHistory = 'tools.ozone.hosting.getAccountHistory';

    /**
     * Get account history, e.g. log of updated email addresses or other identity information.
     *
     * @return array{cursor: string, events: array{details: array, createdBy: string, createdAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-hosting-get-account-history
     */
    #[Get, NSID(self::getAccountHistory)]
    public function getAccountHistory(#[Format('did')] string $did, ?array $events = null, ?string $cursor = null, ?int $limit = 50);
}
