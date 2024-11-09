<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record declaring a social 'follow' relationship of another account. Duplicate follows will be ignored by the AppView.
 */
abstract class AbstractFollow
{
    public const NSID = 'app.bsky.graph.follow';

    protected string $subject;

    protected string $createdAt;
}
