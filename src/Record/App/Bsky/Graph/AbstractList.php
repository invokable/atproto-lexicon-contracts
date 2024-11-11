<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record representing a list of accounts (actors). Scope includes both moderation-oriented lists and curration-oriented lists.
 */
#[Required(['name', 'purpose', 'createdAt'])]
abstract class AbstractList
{
    public const NSID = 'app.bsky.graph.list';

    /**
     * Defines the purpose of the list (aka, moderation-oriented or curration-oriented).
     */
    #[Ref('app.bsky.graph.defs#listPurpose')]
    protected string $purpose;

    /**
     * Display name for list; can not be empty.
     */
    protected string $name;

    protected ?string $description = null;

    protected ?array $descriptionFacets = null;

    #[Blob(accept: ['image/png', 'image/jpeg'], maxSize: 1000000)]
    protected ?array $avatar = null;

    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    #[Format('datetime')]
    protected string $createdAt;
}
