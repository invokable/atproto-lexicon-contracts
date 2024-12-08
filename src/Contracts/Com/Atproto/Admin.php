<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

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

    public const getAccountInfoResponse = ['did' => 'string', 'handle' => 'string', 'email' => 'string', 'relatedRecords' => 'array', 'indexedAt' => 'string', 'invitedBy' => ['code' => 'string', 'available' => 'int', 'disabled' => 'bool', 'forAccount' => 'string', 'createdBy' => 'string', 'createdAt' => 'string', 'uses' => 'array'], 'invites' => [['code' => 'string', 'available' => 'int', 'disabled' => 'bool', 'forAccount' => 'string', 'createdBy' => 'string', 'createdAt' => 'string', 'uses' => 'array']], 'invitesDisabled' => 'bool', 'emailConfirmedAt' => 'string', 'inviteNote' => 'string', 'deactivatedAt' => 'string', 'threatSignatures' => [[]]];
    public const getAccountInfosResponse = ['infos' => [['did' => 'string', 'handle' => 'string', 'email' => 'string', 'relatedRecords' => 'array', 'indexedAt' => 'string', 'invitedBy' => 'array', 'invites' => 'array', 'invitesDisabled' => 'bool', 'emailConfirmedAt' => 'string', 'inviteNote' => 'string', 'deactivatedAt' => 'string', 'threatSignatures' => 'array']]];
    public const getInviteCodesResponse = ['cursor' => 'string', 'codes' => [['code' => 'string', 'available' => 'int', 'disabled' => 'bool', 'forAccount' => 'string', 'createdBy' => 'string', 'createdAt' => 'string', 'uses' => 'array']]];
    public const getSubjectStatusResponse = ['subject' => 'array', 'takedown' => ['applied' => 'bool', 'ref' => 'string'], 'deactivated' => ['applied' => 'bool', 'ref' => 'string']];
    public const searchAccountsResponse = ['cursor' => 'string', 'accounts' => [['did' => 'string', 'handle' => 'string', 'email' => 'string', 'relatedRecords' => 'array', 'indexedAt' => 'string', 'invitedBy' => 'array', 'invites' => 'array', 'invitesDisabled' => 'bool', 'emailConfirmedAt' => 'string', 'inviteNote' => 'string', 'deactivatedAt' => 'string', 'threatSignatures' => 'array']]];
    public const sendEmailResponse = ['sent' => 'bool'];
    public const updateSubjectStatusResponse = ['subject' => 'array', 'takedown' => ['applied' => 'bool', 'ref' => 'string']];

    /**
     * Delete a user account as an administrator.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-delete-account
     */
    #[Post, NSID(self::deleteAccount)]
    public function deleteAccount(#[Format('did')] string $did);

    /**
     * Disable an account from receiving new invite codes, but does not invalidate existing codes.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-disable-account-invites
     */
    #[Post, NSID(self::disableAccountInvites)]
    public function disableAccountInvites(#[Format('did')] string $account, ?string $note = null);

    /**
     * Disable some set of codes and/or all codes associated with a set of users.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-disable-invite-codes
     */
    #[Post, NSID(self::disableInviteCodes)]
    public function disableInviteCodes(?array $codes = null, ?array $accounts = null);

    /**
     * Re-enable an account's ability to receive invite codes.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-enable-account-invites
     */
    #[Post, NSID(self::enableAccountInvites)]
    public function enableAccountInvites(#[Format('did')] string $account, ?string $note = null);

    /**
     * Get details about an account.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-get-account-info
     */
    #[Get, NSID(self::getAccountInfo)]
    #[Output(self::getAccountInfoResponse)]
    public function getAccountInfo(#[Format('did')] string $did);

    /**
     * Get details about some accounts.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-get-account-infos
     */
    #[Get, NSID(self::getAccountInfos)]
    #[Output(self::getAccountInfosResponse)]
    public function getAccountInfos(#[Format('did')] array $dids);

    /**
     * Get an admin view of invite codes.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-get-invite-codes
     */
    #[Get, NSID(self::getInviteCodes)]
    #[Output(self::getInviteCodesResponse)]
    public function getInviteCodes(#[KnownValues(['recent', 'usage'])] ?string $sort = 'recent', ?int $limit = 100, ?string $cursor = null);

    /**
     * Get the service-specific admin status of a subject (account, record, or blob).
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-get-subject-status
     */
    #[Get, NSID(self::getSubjectStatus)]
    #[Output(self::getSubjectStatusResponse)]
    public function getSubjectStatus(#[Format('did')] ?string $did = null, #[Format('at-uri')] ?string $uri = null, #[Format('cid')] ?string $blob = null);

    /**
     * Get list of accounts that matches your search query.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-search-accounts
     */
    #[Get, NSID(self::searchAccounts)]
    #[Output(self::searchAccountsResponse)]
    public function searchAccounts(?string $email = null, ?string $cursor = null, ?int $limit = 50);

    /**
     * Send email to a user's account email address.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-send-email
     */
    #[Post, NSID(self::sendEmail)]
    #[Output(self::sendEmailResponse)]
    public function sendEmail(#[Format('did')] string $recipientDid, string $content, #[Format('did')] string $senderDid, ?string $subject = null, ?string $comment = null);

    /**
     * Administrative action to update an account's email.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-update-account-email
     */
    #[Post, NSID(self::updateAccountEmail)]
    public function updateAccountEmail(#[Format('at-identifier')] string $account, string $email);

    /**
     * Administrative action to update an account's handle.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-update-account-handle
     */
    #[Post, NSID(self::updateAccountHandle)]
    public function updateAccountHandle(#[Format('did')] string $did, #[Format('handle')] string $handle);

    /**
     * Update the password for a user account as an administrator.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-update-account-password
     */
    #[Post, NSID(self::updateAccountPassword)]
    public function updateAccountPassword(#[Format('did')] string $did, #[\SensitiveParameter] string $password);

    /**
     * Update the service-specific admin status of a subject (account, record, or blob).
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-admin-update-subject-status
     */
    #[Post, NSID(self::updateSubjectStatus)]
    #[Output(self::updateSubjectStatusResponse)]
    public function updateSubjectStatus(#[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef', 'com.atproto.admin.defs#repoBlobRef'])] array $subject, #[Ref('com.atproto.admin.defs#statusAttr')] ?array $takedown = null, #[Ref('com.atproto.admin.defs#statusAttr')] ?array $deactivated = null);
}
