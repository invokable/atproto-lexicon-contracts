<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record declaring a social 'follow' relationship of another account. Duplicate follows will be ignored by the AppView.
 */
#[Required(['subject', 'createdAt'])]
abstract class AbstractFollow
{
    public const NSID = 'app.bsky.graph.follow';

    #[Format('did')]
    protected string $subject;

    #[Format('datetime')]
    protected string $createdAt;
}
