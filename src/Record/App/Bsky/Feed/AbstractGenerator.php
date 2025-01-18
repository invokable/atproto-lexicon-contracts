<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record declaring of the existence of a feed generator, and containing metadata about it. The record can exist in any repository.
 */
#[Required(['did', 'displayName', 'createdAt'])]
abstract class AbstractGenerator
{
    public const NSID = 'app.bsky.feed.generator';

    #[Format('did')]
    protected string $did;

    protected string $displayName;

    protected ?string $description = null;

    #[Ref('app.bsky.richtext.facet')]
    protected ?array $descriptionFacets = null;

    #[Blob(accept: ['image/png', 'image/jpeg'], maxSize: 1000000)]
    protected ?array $avatar = null;

    /**
     * Declaration that a feed accepts feedback interactions from a client through app.bsky.feed.sendInteractions.
     */
    protected ?bool $acceptsInteractions = null;

    /**
     * Self-label values.
     */
    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    #[KnownValues(['app.bsky.feed.defs#contentModeUnspecified', 'app.bsky.feed.defs#contentModeVideo'])]
    protected ?string $contentMode = null;

    #[Format('datetime')]
    protected string $createdAt;
}
