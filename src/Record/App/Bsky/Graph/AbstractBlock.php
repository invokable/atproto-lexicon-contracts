<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record declaring a 'block' relationship against another account. NOTE: blocks are public in Bluesky; see blog posts for details.
 */
abstract class AbstractBlock
{
    public const NSID = 'app.bsky.graph.block';

    /**
     * DID of the account to be blocked.
     */
    protected string $subject;

    protected string $createdAt;
}
