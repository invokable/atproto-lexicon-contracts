<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record declaring of the existence of a feed generator, and containing metadata about it. The record can exist in any repository.
 */
abstract class AbstractGenerator
{
    public const NSID = 'app.bsky.feed.generator';

    protected array $required = ['did', 'displayName', 'createdAt'];

    #[Format('did')]
    protected string $did;

    protected string $displayName;

    protected ?string $description = null;

    protected ?array $descriptionFacets = null;

    protected ?string $avatar = null;

    /**
     * Declaration that a feed accepts feedback interactions from a client through app.bsky.feed.sendInteractions.
     */
    protected ?bool $acceptsInteractions = null;

    /**
     * Self-label values.
     */
    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    #[Format('datetime')]
    protected string $createdAt;
}
