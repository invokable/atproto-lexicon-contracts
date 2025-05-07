<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Actor;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A declaration of a Bluesky account status.
 */
#[Required(['status', 'createdAt'])]
abstract class AbstractStatus
{
    public const NSID = 'app.bsky.actor.status';

    /**
     * The status for the account.
     */
    #[KnownValues(['app.bsky.actor.status#live'])]
    protected string $status;

    /**
     * An optional embed associated with the status.
     */
    #[Union(['app.bsky.embed.external'])]
    protected ?array $embed = null;

    /**
     * The duration of the status in minutes. Applications can choose to impose minimum and maximum limits.
     */
    protected ?int $durationMinutes = null;

    #[Format('datetime')]
    protected string $createdAt;
}
