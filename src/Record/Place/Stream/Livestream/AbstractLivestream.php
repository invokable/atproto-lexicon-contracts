<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Place\Stream\Livestream;

use Revolution\AtProto\Lexicon\Attributes\Blob;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record announcing a livestream is happening.
 */
#[Required(['title', 'createdAt'])]
abstract class AbstractLivestream
{
    public const NSID = 'place.stream.livestream';

    /**
     * The URL where this stream can be found. This is primarily a hint for other Streamplace nodes to locate and replicate the stream.
     */
    #[Format('uri')]
    protected ?string $url = null;

    /**
     * The post that announced this livestream.
     */
    #[Ref('com.atproto.repo.strongRef')]
    protected ?array $post = null;

    /**
     * Freeform tags for this stream. Each tag must be alphanumeric (a-z, A-Z, 0-9) plus colon. Tags with colons indicate a specific tag group (e.g. 'lang:en' indicates the stream's primary language).
     */
    protected ?array $tags = null;

    /**
     * The source of the livestream, if available, in a User Agent format: `<product> / <product-version> <comment>` e.g. Streamplace/0.7.5 iOS.
     */
    protected ?string $agent = null;

    #[Blob(accept: ['image/*'], maxSize: 1000000)]
    protected ?array $thumb = null;

    /**
     * The title of the livestream, as it will be announced to followers.
     */
    protected string $title;

    /**
     * Client-declared timestamp when this livestream ended. Ended livestreams are not supposed to start up again.
     */
    #[Format('datetime')]
    protected ?string $endedAt = null;

    /**
     * The game or activity being streamed.
     */
    #[Union(['place.stream.defs#activityGame', 'place.stream.defs#activityLabel'])]
    protected ?array $activity = null;

    /**
     * Client-declared timestamp when this livestream started.
     */
    #[Format('datetime')]
    protected string $createdAt;

    /**
     * Client-declared timestamp when this livestream was last seen by the Streamplace station.
     */
    #[Format('datetime')]
    protected ?string $lastSeenAt = null;

    /**
     * The primary URL where this livestream can be viewed, if available.
     */
    #[Format('uri')]
    protected ?string $canonicalUrl = null;

    /**
     * Time in seconds after which this livestream should be automatically ended if idle. Zero means no timeout.
     */
    protected ?int $idleTimeoutSeconds = null;

    #[Ref('place.stream.livestream#notificationSettings')]
    protected ?array $notificationSettings = null;
}
