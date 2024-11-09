<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Chat\Bsky\Actor;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A declaration of a Bluesky chat account.
 */
#[Required(['allowIncoming'])]
abstract class AbstractDeclaration
{
    public const NSID = 'chat.bsky.actor.declaration';

    protected string $allowIncoming;
}
