<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record representing a block relationship against an entire an entire list of accounts (actors).
 */
#[Required(['subject', 'createdAt'])]
abstract class AbstractListblock
{
    public const NSID = 'app.bsky.graph.listblock';

    /**
     * Reference (AT-URI) to the mod list record.
     */
    #[Format('at-uri')]
    protected string $subject;

    #[Format('datetime')]
    protected string $createdAt;
}
