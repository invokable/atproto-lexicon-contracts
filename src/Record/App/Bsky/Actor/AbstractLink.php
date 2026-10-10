<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Actor;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A link shown on the account's profile. The profile record's links field sets which links are shown, and in what order.
 */
#[Required(['url', 'createdAt'])]
abstract class AbstractLink
{
    public const NSID = 'app.bsky.actor.link';

    /**
     * The link destination, an https URL.
     */
    #[Format('uri')]
    protected string $url;

    /**
     * Optional label for the link. Clients can fall back to the destination's domain.
     */
    protected ?string $title = null;

    /**
     * The destination site's icon, uploaded when the link is saved.
     */
    #[Blob(accept: ['image/png', 'image/jpeg', 'image/webp'], maxSize: 100000)]
    protected ?array $icon = null;

    #[Format('datetime')]
    protected string $createdAt;
}
