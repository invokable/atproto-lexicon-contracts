<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A representation of a record embedded in a Bluesky record (eg, a post), alongside other compatible embeds. For example, a quote post and image, or a quote post and external URL card.
 */
#[Required(['record', 'media'])]
abstract class AbstractRecordWithMedia
{
    public const NSID = 'app.bsky.embed.recordWithMedia';

    #[Ref('app.bsky.embed.record')]
    protected array $record;

    #[Union(['app.bsky.embed.images', 'app.bsky.embed.video', 'app.bsky.embed.external'])]
    protected array $media;
}
