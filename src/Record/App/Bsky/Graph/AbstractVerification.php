<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record declaring a verification relationship between two accounts. Verifications are only considered valid by an app if issued by an account the app considers trusted.
 */
#[Required(['subject', 'handle', 'displayName', 'createdAt'])]
abstract class AbstractVerification
{
    public const NSID = 'app.bsky.graph.verification';

    /**
     * DID of the subject the verification applies to.
     */
    #[Format('did')]
    protected string $subject;

    /**
     * Handle of the subject the verification applies to at the moment of verifying, which might not be the same at the time of viewing. The verification is only valid if the current handle matches the one at the time of verifying.
     */
    #[Format('handle')]
    protected string $handle;

    /**
     * Display name of the subject the verification applies to at the moment of verifying, which might not be the same at the time of viewing. The verification is only valid if the current displayName matches the one at the time of verifying.
     */
    protected string $displayName;

    /**
     * Date of when the verification was created.
     */
    #[Format('datetime')]
    protected string $createdAt;
}
