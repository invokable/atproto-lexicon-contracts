<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Site\Standard\Document;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A document record representing a published article, blog post, or other content. Documents can belong to a publication or exist independently.
 */
#[Required(['site', 'title', 'publishedAt'])]
abstract class AbstractDocument
{
    public const NSID = 'site.standard.document';

    /**
     * Strong reference to a Bluesky post. Useful to keep track of comments off-platform.
     */
    #[Ref('com.atproto.repo.strongRef')]
    protected ?array $bskyPostRef = null;

    /**
     * Open union used to define the record's content. Each entry must specify a $type and may be extended with other lexicons to support additional content formats.
     */
    protected ?array $content = null;

    #[Ref('site.standard.document#contributor')]
    protected ?array $contributors = null;

    /**
     * Image to used for thumbnail or cover image. Less than 1MB is size.
     */
    #[Blob(accept: ['image/*'], maxSize: 1000000)]
    protected ?array $coverImage = null;

    /**
     * A brief description or excerpt from the document.
     */
    protected ?string $description = null;

    /**
     * Self-label values for this post. Effectively content warnings.
     */
    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    /**
     * Array of values describing relationships between this document and external resources.
     */
    protected ?array $links = null;

    /**
     * Combine with site or publication url to construct a canonical URL to the document. Prepend with a leading slash.
     */
    protected ?string $path = null;

    /**
     * Timestamp of the documents publish time.
     */
    #[Format('datetime')]
    protected string $publishedAt;

    /**
     * Points to a publication record (at://) or a publication url (https://) for loose documents. Avoid trailing slashes.
     */
    #[Format('uri')]
    protected string $site;

    /**
     * Array of strings used to tag or categorize the document. Avoid prepending tags with hashtags.
     */
    protected ?array $tags = null;

    /**
     * Plaintext representation of the documents contents. Should not contain markdown or other formatting.
     */
    protected ?string $textContent = null;

    /**
     * Title of the document.
     */
    protected string $title;

    /**
     * Timestamp of the documents last edit.
     */
    #[Format('datetime')]
    protected ?string $updatedAt = null;
}
