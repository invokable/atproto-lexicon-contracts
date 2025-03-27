<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record declaring a 'block' relationship against another account. NOTE: blocks are public in Bluesky; see blog posts for details.
 */
#[Required(['subject', 'createdAt'])]
abstract class AbstractBlock
{
    public const NSID = 'app.bsky.graph.block';

    /**
     * DID of the account to be blocked.
     */
    #[Format('did')]
    protected string $subject;

    #[Format('datetime')]
    protected string $createdAt;
}
