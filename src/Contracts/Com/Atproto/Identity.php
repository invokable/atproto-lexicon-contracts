<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Identity
{
    public const getRecommendedDidCredentials = 'com.atproto.identity.getRecommendedDidCredentials';
    public const requestPlcOperationSignature = 'com.atproto.identity.requestPlcOperationSignature';
    public const resolveHandle = 'com.atproto.identity.resolveHandle';
    public const signPlcOperation = 'com.atproto.identity.signPlcOperation';
    public const submitPlcOperation = 'com.atproto.identity.submitPlcOperation';
    public const updateHandle = 'com.atproto.identity.updateHandle';

    /**
     * Describe the credentials that should be included in the DID doc of an account that is migrating to this service.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-get-recommended-did-credentials
     */
    #[Get, NSID(self::getRecommendedDidCredentials)]
    public function getRecommendedDidCredentials();

    /**
     * Request an email with a code to in order to request a signed PLC operation. Requires Auth.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-request-plc-operation-signature
     */
    #[Post, NSID(self::requestPlcOperationSignature)]
    public function requestPlcOperationSignature();

    /**
     * Resolves a handle (domain name) to a DID.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-resolve-handle
     */
    #[Get, NSID(self::resolveHandle)]
    public function resolveHandle(string $handle);

    /**
     * Signs a PLC operation to update some value(s) in the requesting DID's document.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-sign-plc-operation
     */
    #[Post, NSID(self::signPlcOperation)]
    public function signPlcOperation(?string $token = null, ?array $rotationKeys = null, ?array $alsoKnownAs = null, mixed $verificationMethods = null, mixed $services = null);

    /**
     * Validates a PLC operation to ensure that it doesn't violate a service's constraints or get the identity into a bad state, then submits it to the PLC registry.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-submit-plc-operation
     */
    #[Post, NSID(self::submitPlcOperation)]
    public function submitPlcOperation(mixed $operation);

    /**
     * Updates the current account's handle. Verifies handle validity, and updates did:plc document if necessary. Implemented by PDS, and requires auth.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-update-handle
     */
    #[Post, NSID(self::updateHandle)]
    public function updateHandle(string $handle);
}
