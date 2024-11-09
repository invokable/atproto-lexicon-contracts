<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

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
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-delete-account
     */
    #[Post, NSID(self::deleteAccount)]
    public function deleteAccount(string $did);

    /**
     * Disable an account from receiving new invite codes, but does not invalidate existing codes.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-disable-account-invites
     */
    #[Post, NSID(self::disableAccountInvites)]
    public function disableAccountInvites(string $account, ?string $note = null);

    /**
     * Disable some set of codes and/or all codes associated with a set of users.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-disable-invite-codes
     */
    #[Post, NSID(self::disableInviteCodes)]
    public function disableInviteCodes(?array $codes = null, ?array $accounts = null);

    /**
     * Re-enable an account's ability to receive invite codes.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-enable-account-invites
     */
    #[Post, NSID(self::enableAccountInvites)]
    public function enableAccountInvites(string $account, ?string $note = null);

    /**
     * Get details about an account.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-account-info
     */
    #[Get, NSID(self::getAccountInfo)]
    public function getAccountInfo(string $did);

    /**
     * Get details about some accounts.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-account-infos
     */
    #[Get, NSID(self::getAccountInfos)]
    public function getAccountInfos(array $dids);

    /**
     * Get an admin view of invite codes.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-invite-codes
     */
    #[Get, NSID(self::getInviteCodes)]
    public function getInviteCodes(?string $sort = 'recent', ?int $limit = 100, ?string $cursor = null);

    /**
     * Get the service-specific admin status of a subject (account, record, or blob).
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-get-subject-status
     */
    #[Get, NSID(self::getSubjectStatus)]
    public function getSubjectStatus(?string $did = null, ?string $uri = null, ?string $blob = null);

    /**
     * Get list of accounts that matches your search query.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-search-accounts
     */
    #[Get, NSID(self::searchAccounts)]
    public function searchAccounts(?string $email = null, ?string $cursor = null, ?int $limit = 50);

    /**
     * Send email to a user's account email address.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-send-email
     */
    #[Post, NSID(self::sendEmail)]
    public function sendEmail(string $recipientDid, string $content, string $senderDid, ?string $subject = null, ?string $comment = null);

    /**
     * Administrative action to update an account's email.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-account-email
     */
    #[Post, NSID(self::updateAccountEmail)]
    public function updateAccountEmail(string $account, string $email);

    /**
     * Administrative action to update an account's handle.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-account-handle
     */
    #[Post, NSID(self::updateAccountHandle)]
    public function updateAccountHandle(string $did, string $handle);

    /**
     * Update the password for a user account as an administrator.
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-account-password
     */
    #[Post, NSID(self::updateAccountPassword)]
    public function updateAccountPassword(string $did, #[\SensitiveParameter] string $password);

    /**
     * Update the service-specific admin status of a subject (account, record, or blob).
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-admin-update-subject-status
     */
    #[Post, NSID(self::updateSubjectStatus)]
    public function updateSubjectStatus(#[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef', 'com.atproto.admin.defs#repoBlobRef'])] array $subject, #[Ref('com.atproto.admin.defs#statusAttr')] ?array $takedown = null, #[Ref('com.atproto.admin.defs#statusAttr')] ?array $deactivated = null);
}
