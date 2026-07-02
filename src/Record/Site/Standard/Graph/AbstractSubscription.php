<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Site\Standard\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record declaring a subscription to a publication.
 */
#[Required(['publication'])]
abstract class AbstractSubscription
{
    public const NSID = 'site.standard.graph.subscription';

    #[Format('datetime')]
    protected ?string $createdAt = null;

    /**
     * AT-URI reference to the publication record being subscribed to (ex: at://did:plc:abc123/site.standard.publication/xyz789).
     */
    #[Format('at-uri')]
    protected string $publication;
}
