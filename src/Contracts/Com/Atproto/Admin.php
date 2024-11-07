<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

interface Admin
{
    public const deleteAccount = 'com.atproto.admin.deleteAccount';
    public const disableAccountInvites = 'com.atproto.admin.disableAccountInvites';
    public const disableInviteCodes = 'com.atproto.admin.disableInviteCodes';
    public const enableAccountInvites = 'com.atproto.admin.enableAccountInvites';
    public const getAccountInfo = 'com.atproto.admin.getAccountInfo';
    public const getAccountInfos = 'com.atproto.admin.getAccountInfos';
    public const getInviteCodes = 'com.atproto.admin.getInviteCodes';
    public const getSubjectStatus = 'com.atproto.admin.getSubjectStatus';
    public const searchAccounts = 'com.atproto.admin.searchAccounts';
    public const sendEmail = 'com.atproto.admin.sendEmail';
    public const updateAccountEmail = 'com.atproto.admin.updateAccountEmail';
    public const updateAccountHandle = 'com.atproto.admin.updateAccountHandle';
    public const updateAccountPassword = 'com.atproto.admin.updateAccountPassword';
    public const updateSubjectStatus = 'com.atproto.admin.updateSubjectStatus';

    /**
     * Delete a user account as an administrator.
     *
     * ```
     * POST com.atproto.admin.deleteAccount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-delete-account
     */
    public function deleteAccount(string $did);

    /**
     * Disable an account from receiving new invite codes, but does not invalidate existing codes.
     *
     * ```
     * POST com.atproto.admin.disableAccountInvites
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-disable-account-invites
     */
    public function disableAccountInvites(string $account, ?string $note = null);

    /**
     * Disable some set of codes and/or all codes associated with a set of users.
     *
     * ```
     * POST com.atproto.admin.disableInviteCodes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-disable-invite-codes
     */
    public function disableInviteCodes(?array $codes = null, ?array $accounts = null);

    /**
     * Re-enable an account's ability to receive invite codes.
     *
     * ```
     * POST com.atproto.admin.enableAccountInvites
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-enable-account-invites
     */
    public function enableAccountInvites(string $account, ?string $note = null);

    /**
     * Get details about an account.
     *
     * ```
     * GET com.atproto.admin.getAccountInfo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-account-info
     */
    public function getAccountInfo(string $did);

    /**
     * Get details about some accounts.
     *
     * ```
     * GET com.atproto.admin.getAccountInfos
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-account-infos
     */
    public function getAccountInfos(array $dids);

    /**
     * Get an admin view of invite codes.
     *
     * ```
     * GET com.atproto.admin.getInviteCodes
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-invite-codes
     */
    public function getInviteCodes(?string $sort = 'recent', ?int $limit = 100, ?string $cursor = null);

    /**
     * Get the service-specific admin status of a subject (account, record, or blob).
     *
     * ```
     * GET com.atproto.admin.getSubjectStatus
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-subject-status
     */
    public function getSubjectStatus(?string $did = null, ?string $uri = null, ?string $blob = null);

    /**
     * Get list of accounts that matches your search query.
     *
     * ```
     * GET com.atproto.admin.searchAccounts
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-search-accounts
     */
    public function searchAccounts(?string $email = null, ?string $cursor = null, ?int $limit = 50);

    /**
     * Send email to a user's account email address.
     *
     * ```
     * POST com.atproto.admin.sendEmail
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-send-email
     */
    public function sendEmail(string $recipientDid, string $content, string $senderDid, ?string $subject = null, ?string $comment = null);

    /**
     * Administrative action to update an account's email.
     *
     * ```
     * POST com.atproto.admin.updateAccountEmail
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-account-email
     */
    public function updateAccountEmail(string $account, string $email);

    /**
     * Administrative action to update an account's handle.
     *
     * ```
     * POST com.atproto.admin.updateAccountHandle
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-account-handle
     */
    public function updateAccountHandle(string $did, string $handle);

    /**
     * Update the password for a user account as an administrator.
     *
     * ```
     * POST com.atproto.admin.updateAccountPassword
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-account-password
     */
    public function updateAccountPassword(string $did, #[\SensitiveParameter] string $password);

    /**
     * Update the service-specific admin status of a subject (account, record, or blob).
     *
     * ```
     * POST com.atproto.admin.updateSubjectStatus
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-subject-status
     */
    public function updateSubjectStatus(array $subject, ?array $takedown = null, ?array $deactivated = null);
}
