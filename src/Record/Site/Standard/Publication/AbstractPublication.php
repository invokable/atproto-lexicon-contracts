<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Site\Standard\Publication;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A publication record representing a blog, website, or content platform. Publications serve as containers for documents and define the overall branding and settings.
 */
#[Required(['url', 'name'])]
abstract class AbstractPublication
{
    public const NSID = 'site.standard.publication';

    /**
     * Simplified publication theme for tools and apps to utilize when displaying content.
     */
    #[Ref('site.standard.theme.basic')]
    protected $basicTheme = null;

    /**
     * Brief description of the publication.
     */
    protected ?string $description = null;

    /**
     * Square image to identify the publication. Should be at least 256x256.
     */
    #[Blob(accept: ['image/*'], maxSize: 1000000)]
    protected ?array $icon = null;

    /**
     * Self-label values for this publication. Effectively content warnings.
     */
    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    /**
     * Name of the publication.
     */
    protected string $name;

    /**
     * Object containing platform specific preferences (with a few shared properties).
     */
    #[Ref('site.standard.publication#preferences')]
    protected ?array $preferences = null;

    /**
     * Base publication url (ex: https://standard.site). The canonical document URL is formed by combining this value with the document path.
     */
    #[Format('uri')]
    protected string $url;
}
