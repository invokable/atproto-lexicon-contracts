<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Labeler;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A declaration of the existence of labeler service.
 */
abstract class AbstractService
{
    public const NSID = 'app.bsky.labeler.service';

    protected array $required = ['policies', 'createdAt'];

    #[Ref('app.bsky.labeler.defs#labelerPolicies')]
    protected array $policies;

    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    #[Format('datetime')]
    protected string $createdAt;
}
