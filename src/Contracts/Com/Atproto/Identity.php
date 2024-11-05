<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

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
     * ```
     * GET com.atproto.identity.getRecommendedDidCredentials
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-get-recommended-did-credentials
     */
    public function getRecommendedDidCredentials();

    /**
     * Request an email with a code to in order to request a signed PLC operation. Requires Auth.
     *
     * ```
     * POST com.atproto.identity.requestPlcOperationSignature
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-request-plc-operation-signature
     */
    public function requestPlcOperationSignature();

    /**
     * Resolves a handle (domain name) to a DID.
     *
     * ```
     * GET com.atproto.identity.resolveHandle
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-resolve-handle
     */
    public function resolveHandle(string $handle);

    /**
     * Signs a PLC operation to update some value(s) in the requesting DID's document.
     *
     * ```
     * POST com.atproto.identity.signPlcOperation
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-sign-plc-operation
     */
    public function signPlcOperation(?string $token = null, ?array $rotationKeys = null, ?array $alsoKnownAs = null, mixed $verificationMethods = null, mixed $services = null);

    /**
     * Validates a PLC operation to ensure that it doesn't violate a service's constraints or get the identity into a bad state, then submits it to the PLC registry.
     *
     * ```
     * POST com.atproto.identity.submitPlcOperation
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-submit-plc-operation
     */
    public function submitPlcOperation(mixed $operation);

    /**
     * Updates the current account's handle. Verifies handle validity, and updates did:plc document if necessary. Implemented by PDS, and requires auth.
     *
     * ```
     * POST com.atproto.identity.updateHandle
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-identity-update-handle
     */
    public function updateHandle(string $handle);
}
