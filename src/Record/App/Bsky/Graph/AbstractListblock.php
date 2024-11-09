<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record representing a block relationship against an entire an entire list of accounts (actors).
 */
abstract class AbstractListblock
{
    public const NSID = 'app.bsky.graph.listblock';

    protected array $required = ['subject', 'createdAt'];

    /**
     * Reference (AT-URI) to the mod list record.
     */
    protected string $subject;

    protected string $createdAt;
}
