<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Chat\Bsky\Actor;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A declaration of a Bluesky chat account.
 */
abstract class AbstractDeclaration
{
    public const NSID = 'chat.bsky.actor.declaration';

    protected array $required = ['allowIncoming'];

    protected string $allowIncoming;
}
