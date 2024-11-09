<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Labeler;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A declaration of the existence of labeler service.
 */
abstract class AbstractService
{
    public const NSID = 'app.bsky.labeler.service';

    #[Ref('app.bsky.labeler.defs#labelerPolicies')]
    protected array $policies;

    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    protected string $createdAt;
}
