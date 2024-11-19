<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A video embedded in a Bluesky record (eg, a post).
 */
#[Required(['video'])]
abstract class AbstractVideo
{
    public const NSID = 'app.bsky.embed.video';

    #[Blob(accept: ['video/mp4'], maxSize: 50000000)]
    protected array $video;

    #[Ref('app.bsky.embed.video#caption')]
    protected ?array $captions = null;

    /**
     * Alt text description of the video, for accessibility.
     */
    protected ?string $alt = null;

    #[Ref('app.bsky.embed.defs#aspectRatio')]
    protected ?array $aspectRatio = null;
}
