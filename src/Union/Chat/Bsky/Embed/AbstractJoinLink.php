<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\Chat\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A join link embedded in a chat message.
 */
#[Required(['code'])]
abstract class AbstractJoinLink
{
    public const NSID = 'chat.bsky.embed.joinLink';

    /**
     * The join link code.
     */
    protected string $code;
}
