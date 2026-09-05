<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Actor;

use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A declaration of an account's preferences for appearing in content discovery surfaces.
 */
#[Required(['hideFromAlgorithmicRecommendations'])]
abstract class AbstractContentVisibilityDeclaration
{
    public const NSID = 'app.bsky.actor.contentVisibilityDeclaration';

    /**
     * Whether the account requests that its posts be hidden from algorithmic recommendations. Consumers must treat a missing record as false.
     */
    protected bool $hideFromAlgorithmicRecommendations;
}
