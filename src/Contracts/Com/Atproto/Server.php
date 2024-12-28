<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Server
{
    public const activateAccount = 'com.atproto.server.activateAccount';
    public const checkAccountStatus = 'com.atproto.server.checkAccountStatus';
    public const confirmEmail = 'com.atproto.server.confirmEmail';
    public const createAccount = 'com.atproto.server.createAccount';
    public const createAppPassword = 'com.atproto.server.createAppPassword';
    public const createInviteCode = 'com.atproto.server.createInviteCode';
    public const createInviteCodes = 'com.atproto.server.createInviteCodes';
    public const createSession = 'com.atproto.server.createSession';
    public const deactivateAccount = 'com.atproto.server.deactivateAccount';
    public const deleteAccount = 'com.atproto.server.deleteAccount';
    public const deleteSession = 'com.atproto.server.deleteSession';
    public const describeServer = 'com.atproto.server.describeServer';
    public const getAccountInviteCodes = 'com.atproto.server.getAccountInviteCodes';
    public const getServiceAuth = 'com.atproto.server.getServiceAuth';
    public const getSession = 'com.atproto.server.getSession';
    public const listAppPasswords = 'com.atproto.server.listAppPasswords';
    public const refreshSession = 'com.atproto.server.refreshSession';
    public const requestAccountDelete = 'com.atproto.server.requestAccountDelete';
    public const requestEmailConfirmation = 'com.atproto.server.requestEmailConfirmation';
    public const requestEmailUpdate = 'com.atproto.server.requestEmailUpdate';
    public const requestPasswordReset = 'com.atproto.server.requestPasswordReset';
    public const reserveSigningKey = 'com.atproto.server.reserveSigningKey';
    public const resetPassword = 'com.atproto.server.resetPassword';
    public const revokeAppPassword = 'com.atproto.server.revokeAppPassword';
    public const updateEmail = 'com.atproto.server.updateEmail';

    public const checkAccountStatusResponse = ['activated' => 'bool', 'validDid' => 'bool', 'repoCommit' => 'string', 'repoRev' => 'string', 'repoBlocks' => 'int', 'indexedRecords' => 'int', 'privateStateValues' => 'int', 'expectedBlobs' => 'int', 'importedBlobs' => 'int'];
    public const createAccountResponse = ['accessJwt' => 'string', 'refreshJwt' => 'string', 'handle' => 'string', 'did' => 'string', 'didDoc' => 'mixed'];
    public const createAppPasswordResponse = ['name' => 'string', 'password' => 'string', 'createdAt' => 'string', 'privileged' => 'bool'];
    public const createInviteCodeResponse = ['code' => 'string'];
    public const createInviteCodesResponse = ['codes' => [['account' => 'string', 'codes' => 'array']]];
    public const createSessionResponse = ['accessJwt' => 'string', 'refreshJwt' => 'string', 'handle' => 'string', 'did' => 'string', 'didDoc' => 'mixed', 'email' => 'string', 'emailConfirmed' => 'bool', 'emailAuthFactor' => 'bool', 'active' => 'bool', 'status' => 'string'];
    public const describeServerResponse = ['inviteCodeRequired' => 'bool', 'phoneVerificationRequired' => 'bool', 'availableUserDomains' => 'array', 'links' => ['privacyPolicy' => 'string', 'termsOfService' => 'string'], 'contact' => ['email' => 'string'], 'did' => 'string'];
    public const getAccountInviteCodesResponse = ['codes' => [['code' => 'string', 'available' => 'int', 'disabled' => 'bool', 'forAccount' => 'string', 'createdBy' => 'string', 'createdAt' => 'string', 'uses' => 'array']]];
    public const getServiceAuthResponse = ['token' => 'string'];
    public const getSessionResponse = ['handle' => 'string', 'did' => 'string', 'email' => 'string', 'emailConfirmed' => 'bool', 'emailAuthFactor' => 'bool', 'didDoc' => 'mixed', 'active' => 'bool', 'status' => 'string'];
    public const listAppPasswordsResponse = ['passwords' => [['name' => 'string', 'createdAt' => 'string', 'privileged' => 'bool']]];
    public const refreshSessionResponse = ['accessJwt' => 'string', 'refreshJwt' => 'string', 'handle' => 'string', 'did' => 'string', 'didDoc' => 'mixed', 'active' => 'bool', 'status' => 'string'];
    public const requestEmailUpdateResponse = ['tokenRequired' => 'bool'];
    public const reserveSigningKeyResponse = ['signingKey' => 'string'];

    /**
     * Activates a currently deactivated account. Used to finalize account migration after the account's repo is imported and identity is setup.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-activate-account
     */
    #[Post, NSID(self::activateAccount)]
    public function activateAccount();

    /**
     * Returns the status of an account, especially as pertaining to import or recovery. Can be called many times over the course of an account migration. Requires auth and can only be called pertaining to oneself.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-check-account-status
     */
    #[Get, NSID(self::checkAccountStatus)]
    #[Output(self::checkAccountStatusResponse)]
    public function checkAccountStatus();

    /**
     * Confirm an email using a token from com.atproto.server.requestEmailConfirmation.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-confirm-email
     */
    #[Post, NSID(self::confirmEmail)]
    public function confirmEmail(string $email, string $token);

    /**
     * Create an account. Implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-create-account
     */
    #[Post, NSID(self::createAccount)]
    #[Output(self::createAccountResponse)]
    public function createAccount(#[Format('handle')] string $handle, ?string $email = null, #[Format('did')] ?string $did = null, ?string $inviteCode = null, ?string $verificationCode = null, ?string $verificationPhone = null, #[\SensitiveParameter] ?string $password = null, ?string $recoveryKey = null, mixed $plcOp = null);

    /**
     * Create an App Password.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-create-app-password
     */
    #[Post, NSID(self::createAppPassword)]
    #[Output(self::createAppPasswordResponse)]
    public function createAppPassword(string $name, ?bool $privileged = null);

    /**
     * Create an invite code.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-create-invite-code
     */
    #[Post, NSID(self::createInviteCode)]
    #[Output(self::createInviteCodeResponse)]
    public function createInviteCode(int $useCount, #[Format('did')] ?string $forAccount = null);

    /**
     * Create invite codes.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-create-invite-codes
     */
    #[Post, NSID(self::createInviteCodes)]
    #[Output(self::createInviteCodesResponse)]
    public function createInviteCodes(int $codeCount, int $useCount, #[Format('did')] ?array $forAccounts = null);

    /**
     * Create an authentication session.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-create-session
     */
    #[Post, NSID(self::createSession)]
    #[Output(self::createSessionResponse)]
    public function createSession(string $identifier, #[\SensitiveParameter] string $password, ?string $authFactorToken = null, ?bool $allowTakendown = null);

    /**
     * Deactivates a currently active account. Stops serving of repo, and future writes to repo until reactivated. Used to finalize account migration with the old host after the account has been activated on the new host.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-deactivate-account
     */
    #[Post, NSID(self::deactivateAccount)]
    public function deactivateAccount(#[Format('datetime')] ?string $deleteAfter = null);

    /**
     * Delete an actor's account with a token and password. Can only be called after requesting a deletion token. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-delete-account
     */
    #[Post, NSID(self::deleteAccount)]
    public function deleteAccount(#[Format('did')] string $did, #[\SensitiveParameter] string $password, string $token);

    /**
     * Delete the current session. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-delete-session
     */
    #[Post, NSID(self::deleteSession)]
    public function deleteSession();

    /**
     * Describes the server's account creation requirements and capabilities. Implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-describe-server
     */
    #[Get, NSID(self::describeServer)]
    #[Output(self::describeServerResponse)]
    public function describeServer();

    /**
     * Get all invite codes for the current account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-get-account-invite-codes
     */
    #[Get, NSID(self::getAccountInviteCodes)]
    #[Output(self::getAccountInviteCodesResponse)]
    public function getAccountInviteCodes(?bool $includeUsed = null, ?bool $createAvailable = null);

    /**
     * Get a signed token on behalf of the requesting DID for the requested service.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-get-service-auth
     */
    #[Get, NSID(self::getServiceAuth)]
    #[Output(self::getServiceAuthResponse)]
    public function getServiceAuth(#[Format('did')] string $aud, ?int $exp = null, #[Format('nsid')] ?string $lxm = null);

    /**
     * Get information about the current auth session. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-get-session
     */
    #[Get, NSID(self::getSession)]
    #[Output(self::getSessionResponse)]
    public function getSession();

    /**
     * List all App Passwords.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-list-app-passwords
     */
    #[Get, NSID(self::listAppPasswords)]
    #[Output(self::listAppPasswordsResponse)]
    public function listAppPasswords();

    /**
     * Refresh an authentication session. Requires auth using the 'refreshJwt' (not the 'accessJwt').
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-refresh-session
     */
    #[Post, NSID(self::refreshSession)]
    #[Output(self::refreshSessionResponse)]
    public function refreshSession();

    /**
     * Initiate a user account deletion via email.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-request-account-delete
     */
    #[Post, NSID(self::requestAccountDelete)]
    public function requestAccountDelete();

    /**
     * Request an email with a code to confirm ownership of email.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-request-email-confirmation
     */
    #[Post, NSID(self::requestEmailConfirmation)]
    public function requestEmailConfirmation();

    /**
     * Request a token in order to update email.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-request-email-update
     */
    #[Post, NSID(self::requestEmailUpdate)]
    #[Output(self::requestEmailUpdateResponse)]
    public function requestEmailUpdate();

    /**
     * Initiate a user account password reset via email.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-request-password-reset
     */
    #[Post, NSID(self::requestPasswordReset)]
    public function requestPasswordReset(string $email);

    /**
     * Reserve a repo signing key, for use with account creation. Necessary so that a DID PLC update operation can be constructed during an account migraiton. Public and does not require auth; implemented by PDS. NOTE: this endpoint may change when full account migration is implemented.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-reserve-signing-key
     */
    #[Post, NSID(self::reserveSigningKey)]
    #[Output(self::reserveSigningKeyResponse)]
    public function reserveSigningKey(#[Format('did')] ?string $did = null);

    /**
     * Reset a user account password using a token.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-reset-password
     */
    #[Post, NSID(self::resetPassword)]
    public function resetPassword(string $token, #[\SensitiveParameter] string $password);

    /**
     * Revoke an App Password by name.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-revoke-app-password
     */
    #[Post, NSID(self::revokeAppPassword)]
    public function revokeAppPassword(string $name);

    /**
     * Update an account's email.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-server-update-email
     */
    #[Post, NSID(self::updateEmail)]
    public function updateEmail(string $email, ?bool $emailAuthFactor = null, ?string $token = null);
}
