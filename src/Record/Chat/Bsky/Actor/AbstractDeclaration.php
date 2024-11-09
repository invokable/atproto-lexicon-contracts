<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Chat\Bsky\Actor;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * A declaration of a Bluesky chat account.
 */
abstract class AbstractDeclaration
{
    public const NSID = 'chat.bsky.actor.declaration';

    protected string $allowIncoming;
}
