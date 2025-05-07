<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Verification
{
    public const grantVerifications = 'tools.ozone.verification.grantVerifications';
    public const listVerifications = 'tools.ozone.verification.listVerifications';
    public const revokeVerifications = 'tools.ozone.verification.revokeVerifications';

    public const grantVerificationsResponse = ['verifications' => [['issuer' => 'string', 'uri' => 'string', 'subject' => 'string', 'handle' => 'string', 'displayName' => 'string', 'createdAt' => 'string', 'revokeReason' => 'string', 'revokedAt' => 'string', 'revokedBy' => 'string', 'subjectProfile' => 'array', 'issuerProfile' => 'array', 'subjectRepo' => 'array', 'issuerRepo' => 'array']], 'failedVerifications' => [['error' => 'string', 'subject' => 'string']]];
    public const listVerificationsResponse = ['cursor' => 'string', 'verifications' => [['issuer' => 'string', 'uri' => 'string', 'subject' => 'string', 'handle' => 'string', 'displayName' => 'string', 'createdAt' => 'string', 'revokeReason' => 'string', 'revokedAt' => 'string', 'revokedBy' => 'string', 'subjectProfile' => 'array', 'issuerProfile' => 'array', 'subjectRepo' => 'array', 'issuerRepo' => 'array']]];
    public const revokeVerificationsResponse = ['revokedVerifications' => 'array', 'failedRevocations' => [['uri' => 'string', 'error' => 'string']]];

    /**
     * Grant verifications to multiple subjects. Allows batch processing of up to 100 verifications at once.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-verification-grant-verifications
     */
    #[Post, NSID(self::grantVerifications)]
    #[Output(self::grantVerificationsResponse)]
    public function grantVerifications(#[Ref('tools.ozone.verification.grantVerifications#verificationInput')] array $verifications);

    /**
     * List verifications.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-verification-list-verifications
     */
    #[Get, NSID(self::listVerifications)]
    #[Output(self::listVerificationsResponse)]
    public function listVerifications(?string $cursor = null, ?int $limit = 50, #[Format('datetime')] ?string $createdAfter = null, #[Format('datetime')] ?string $createdBefore = null, #[Format('did')] ?array $issuers = null, #[Format('did')] ?array $subjects = null, ?string $sortDirection = 'desc', ?bool $isRevoked = null);

    /**
     * Revoke previously granted verifications in batches of up to 100.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-verification-revoke-verifications
     */
    #[Post, NSID(self::revokeVerifications)]
    #[Output(self::revokeVerificationsResponse)]
    public function revokeVerifications(#[Format('at-uri')] array $uris, ?string $revokeReason = null);
}
