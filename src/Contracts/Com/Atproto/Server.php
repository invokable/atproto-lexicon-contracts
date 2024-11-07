<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

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

    /**
     * Activates a currently deactivated account. Used to finalize account migration after the account's repo is imported and identity is setup.
     *
     * ```
     * POST com.atproto.server.activateAccount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-activate-account
     */
    public function activateAccount();

    /**
     * Returns the status of an account, especially as pertaining to import or recovery. Can be called many times over the course of an account migration. Requires auth and can only be called pertaining to oneself.
     *
     * ```
     * GET com.atproto.server.checkAccountStatus
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-check-account-status
     */
    public function checkAccountStatus();

    /**
     * Confirm an email using a token from com.atproto.server.requestEmailConfirmation.
     *
     * ```
     * POST com.atproto.server.confirmEmail
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-confirm-email
     */
    public function confirmEmail(string $email, string $token);

    /**
     * Create an account. Implemented by PDS.
     *
     * ```
     * POST com.atproto.server.createAccount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-create-account
     */
    public function createAccount(string $handle, ?string $email = null, ?string $did = null, ?string $inviteCode = null, ?string $verificationCode = null, ?string $verificationPhone = null, #[\SensitiveParameter] ?string $password = null, ?string $recoveryKey = null, mixed $plcOp = null);

    /**
     * Create an App Password.
     *
     * ```
     * POST com.atproto.server.createAppPassword
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-create-app-password
     */
    public function createAppPassword(string $name, ?bool $privileged = null);

    /**
     * Create an invite code.
     *
     * ```
     * POST com.atproto.server.createInviteCode
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-create-invite-code
     */
    public function createInviteCode(int $useCount, ?string $forAccount = null);

    /**
     * Create invite codes.
     *
     * ```
     * POST com.atproto.server.createInviteCodes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-create-invite-codes
     */
    public function createInviteCodes(int $codeCount, int $useCount, ?array $forAccounts = null);

    /**
     * Create an authentication session.
     *
     * ```
     * POST com.atproto.server.createSession
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-create-session
     */
    public function createSession(string $identifier, #[\SensitiveParameter] string $password, ?string $authFactorToken = null);

    /**
     * Deactivates a currently active account. Stops serving of repo, and future writes to repo until reactivated. Used to finalize account migration with the old host after the account has been activated on the new host.
     *
     * ```
     * POST com.atproto.server.deactivateAccount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-deactivate-account
     */
    public function deactivateAccount(?string $deleteAfter = null);

    /**
     * Delete an actor's account with a token and password. Can only be called after requesting a deletion token. Requires auth.
     *
     * ```
     * POST com.atproto.server.deleteAccount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-delete-account
     */
    public function deleteAccount(string $did, #[\SensitiveParameter] string $password, string $token);

    /**
     * Delete the current session. Requires auth.
     *
     * ```
     * POST com.atproto.server.deleteSession
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-delete-session
     */
    public function deleteSession();

    /**
     * Describes the server's account creation requirements and capabilities. Implemented by PDS.
     *
     * ```
     * GET com.atproto.server.describeServer
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-describe-server
     */
    public function describeServer();

    /**
     * Get all invite codes for the current account. Requires auth.
     *
     * ```
     * GET com.atproto.server.getAccountInviteCodes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-get-account-invite-codes
     */
    public function getAccountInviteCodes(?bool $includeUsed = null, ?bool $createAvailable = null);

    /**
     * Get a signed token on behalf of the requesting DID for the requested service.
     *
     * ```
     * GET com.atproto.server.getServiceAuth
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-get-service-auth
     */
    public function getServiceAuth(string $aud, ?int $exp = null, ?string $lxm = null);

    /**
     * Get information about the current auth session. Requires auth.
     *
     * ```
     * GET com.atproto.server.getSession
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-get-session
     */
    public function getSession();

    /**
     * List all App Passwords.
     *
     * ```
     * GET com.atproto.server.listAppPasswords
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-list-app-passwords
     */
    public function listAppPasswords();

    /**
     * Refresh an authentication session. Requires auth using the 'refreshJwt' (not the 'accessJwt').
     *
     * ```
     * POST com.atproto.server.refreshSession
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-refresh-session
     */
    public function refreshSession();

    /**
     * Initiate a user account deletion via email.
     *
     * ```
     * POST com.atproto.server.requestAccountDelete
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-request-account-delete
     */
    public function requestAccountDelete();

    /**
     * Request an email with a code to confirm ownership of email.
     *
     * ```
     * POST com.atproto.server.requestEmailConfirmation
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-request-email-confirmation
     */
    public function requestEmailConfirmation();

    /**
     * Request a token in order to update email.
     *
     * ```
     * POST com.atproto.server.requestEmailUpdate
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-request-email-update
     */
    public function requestEmailUpdate();

    /**
     * Initiate a user account password reset via email.
     *
     * ```
     * POST com.atproto.server.requestPasswordReset
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-request-password-reset
     */
    public function requestPasswordReset(string $email);

    /**
     * Reserve a repo signing key, for use with account creation. Necessary so that a DID PLC update operation can be constructed during an account migraiton. Public and does not require auth; implemented by PDS. NOTE: this endpoint may change when full account migration is implemented.
     *
     * ```
     * POST com.atproto.server.reserveSigningKey
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-reserve-signing-key
     */
    public function reserveSigningKey(?string $did = null);

    /**
     * Reset a user account password using a token.
     *
     * ```
     * POST com.atproto.server.resetPassword
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-reset-password
     */
    public function resetPassword(string $token, #[\SensitiveParameter] string $password);

    /**
     * Revoke an App Password by name.
     *
     * ```
     * POST com.atproto.server.revokeAppPassword
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-revoke-app-password
     */
    public function revokeAppPassword(string $name);

    /**
     * Update an account's email.
     *
     * ```
     * POST com.atproto.server.updateEmail
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-server-update-email
     */
    public function updateEmail(string $email, ?bool $emailAuthFactor = null, ?string $token = null);
}
