<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Notification;

use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A declaration of the user's choices related to notifications that can be produced by them.
 */
#[Required(['allowSubscriptions'])]
abstract class AbstractDeclaration
{
    public const NSID = 'app.bsky.notification.declaration';

    /**
     * A declaration of the user's preference for allowing activity subscriptions from other users. Absence of a record implies 'followers'.
     */
    #[KnownValues(['followers', 'mutuals', 'none'])]
    protected string $allowSubscriptions;
}
