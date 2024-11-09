<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Ref;

/**
 * Record declaring of the existence of a feed generator, and containing metadata about it. The record can exist in any repository.
 */
abstract class AbstractGenerator
{
    public const NSID ='app.bsky.feed.generator';

    protected string $did;

    protected string $displayName;

    protected ?string $description = null;

    protected ?array $descriptionFacets = null;

    protected ?string $avatar = null;

   /**
    * Declaration that a feed accepts feedback interactions from a client through app.bsky.feed.sendInteractions
    */
    protected ?bool $acceptsInteractions = null;

   /**
    * Self-label values
    */
    protected ?array $labels = null;

    protected string $createdAt;
}
