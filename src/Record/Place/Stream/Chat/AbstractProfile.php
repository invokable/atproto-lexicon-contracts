<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Place\Stream\Chat;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record containing customizations for a user's chat profile.
 */
#[Required([])]
abstract class AbstractProfile
{
    public const NSID = 'place.stream.chat.profile';

    #[Ref('place.stream.chat.profile#color')]
    protected ?array $color = null;

    /**
     * Badge selections for display in chat.
     */
    #[Ref('place.stream.chat.profile#badgeSelections')]
    protected ?array $badges = null;

    /**
     * Self-applied labels for this profile, e.g. 'bot'.
     */
    #[Ref('place.stream.chat.profile#selfLabel')]
    protected ?array $selfLabels = null;
}
