<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record representing a list of accounts (actors). Scope includes both moderation-oriented lists and curration-oriented lists.
 */
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

    protected ?string $avatar = null;

    protected ?array $labels = null;

    protected string $createdAt;
}
