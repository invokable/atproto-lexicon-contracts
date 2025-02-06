<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Feed;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record containing a Bluesky post.
 */
#[Required(['text', 'createdAt'])]
abstract class AbstractPost
{
    public const NSID = 'app.bsky.feed.post';

    /**
     * The primary post content. May be an empty string, if there are embeds.
     */
    protected string $text;

    /**
     * Annotations of text (mentions, URLs, hashtags, etc).
     */
    #[Ref('app.bsky.richtext.facet')]
    protected ?array $facets = null;

    #[Ref('app.bsky.feed.post#replyRef')]
    protected ?array $reply = null;

    #[Union(['app.bsky.embed.images', 'app.bsky.embed.video', 'app.bsky.embed.external', 'app.bsky.embed.record', 'app.bsky.embed.recordWithMedia'])]
    protected ?array $embed = null;

    /**
     * Indicates human language of post primary text content.
     */
    #[Format('language')]
    protected ?array $langs = null;

    /**
     * Self-label values for this post. Effectively content warnings.
     */
    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    /**
     * Additional hashtags, in addition to any included in post text and facets.
     */
    protected ?array $tags = null;

    /**
     * Client-declared timestamp when this post was originally created.
     */
    #[Format('datetime')]
    protected string $createdAt;
}
