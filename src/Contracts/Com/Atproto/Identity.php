<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Identity
{
    public const getRecommendedDidCredentials = 'com.atproto.identity.getRecommendedDidCredentials';
    public const refreshIdentity = 'com.atproto.identity.refreshIdentity';
    public const requestPlcOperationSignature = 'com.atproto.identity.requestPlcOperationSignature';
    public const resolveDid = 'com.atproto.identity.resolveDid';
    public const resolveHandle = 'com.atproto.identity.resolveHandle';
    public const resolveIdentity = 'com.atproto.identity.resolveIdentity';
    public const signPlcOperation = 'com.atproto.identity.signPlcOperation';
    public const submitPlcOperation = 'com.atproto.identity.submitPlcOperation';
    public const updateHandle = 'com.atproto.identity.updateHandle';

    /**
     * Describe the credentials that should be included in the DID doc of an account that is migrating to this service.
     *
     * @return array{rotationKeys: array, alsoKnownAs: array, verificationMethods: mixed, services: mixed}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-get-recommended-did-credentials
     */
    #[Get, NSID(self::getRecommendedDidCredentials)]
    public function getRecommendedDidCredentials();

    /**
     * Request that the server re-resolve an identity (DID and handle). The server may ignore this request, or require authentication, depending on the role, implementation, and policy of the server.
     *
     * @return array{did: string, handle: string, didDoc: mixed}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-refresh-identity
     */
    #[Post, NSID(self::refreshIdentity)]
    public function refreshIdentity(#[Format('at-identifier')] string $identifier);

    /**
     * Request an email with a code to in order to request a signed PLC operation. Requires Auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-request-plc-operation-signature
     */
    #[Post, NSID(self::requestPlcOperationSignature)]
    public function requestPlcOperationSignature();

    /**
     * Resolves DID to DID document. Does not bi-directionally verify handle.
     *
     * @return array{didDoc: mixed}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-resolve-did
     */
    #[Get, NSID(self::resolveDid)]
    public function resolveDid(#[Format('did')] string $did);

    /**
     * Resolves an atproto handle (hostname) to a DID. Does not necessarily bi-directionally verify against the the DID document.
     *
     * @return array{did: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-resolve-handle
     */
    #[Get, NSID(self::resolveHandle)]
    public function resolveHandle(#[Format('handle')] string $handle);

    /**
     * Resolves an identity (DID or Handle) to a full identity (DID document and verified handle).
     *
     * @return array{did: string, handle: string, didDoc: mixed}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-resolve-identity
     */
    #[Get, NSID(self::resolveIdentity)]
    public function resolveIdentity(#[Format('at-identifier')] string $identifier);

    /**
     * Signs a PLC operation to update some value(s) in the requesting DID's document.
     *
     * @return array{operation: mixed}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-sign-plc-operation
     */
    #[Post, NSID(self::signPlcOperation)]
    public function signPlcOperation(?string $token = null, ?array $rotationKeys = null, ?array $alsoKnownAs = null, mixed $verificationMethods = null, mixed $services = null);

    /**
     * Validates a PLC operation to ensure that it doesn't violate a service's constraints or get the identity into a bad state, then submits it to the PLC registry.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-submit-plc-operation
     */
    #[Post, NSID(self::submitPlcOperation)]
    public function submitPlcOperation(mixed $operation);

    /**
     * Updates the current account's handle. Verifies handle validity, and updates did:plc document if necessary. Implemented by PDS, and requires auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-identity-update-handle
     */
    #[Post, NSID(self::updateHandle)]
    public function updateHandle(#[Format('handle')] string $handle);
}
