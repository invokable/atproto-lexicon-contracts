<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Place\Stream\Chat;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record pinning a chat message for prominent display.
 */
#[Required(['pinnedMessage', 'createdAt'])]
abstract class AbstractPinnedRecord
{
    public const NSID = 'place.stream.chat.pinnedRecord';

    /**
     * DID of the user who pinned the message.
     */
    #[Format('did')]
    protected ?string $pinnedBy = null;

    /**
     * When this pin was created.
     */
    #[Format('datetime')]
    protected string $createdAt;

    /**
     * Optional expiration time. If set, the pin is considered inactive after this time.
     */
    #[Format('datetime')]
    protected ?string $expiresAt = null;

    /**
     * AT-URI of the pinned chat message.
     */
    #[Format('at-uri')]
    protected string $pinnedMessage;
}
