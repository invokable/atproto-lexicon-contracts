<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Inbox
{
    public const appealActionedSubject = 'tools.ozone.inbox.appealActionedSubject';
    public const getAccountStatus = 'tools.ozone.inbox.getAccountStatus';
    public const getActionedSubject = 'tools.ozone.inbox.getActionedSubject';
    public const getNotificationPreferences = 'tools.ozone.inbox.getNotificationPreferences';
    public const getReport = 'tools.ozone.inbox.getReport';
    public const getUnreadCount = 'tools.ozone.inbox.getUnreadCount';
    public const listActionedSubjects = 'tools.ozone.inbox.listActionedSubjects';
    public const listNotifications = 'tools.ozone.inbox.listNotifications';
    public const listReports = 'tools.ozone.inbox.listReports';
    public const putNotificationPreferences = 'tools.ozone.inbox.putNotificationPreferences';
    public const updateSeen = 'tools.ozone.inbox.updateSeen';

    /**
     * Appeal a moderation action affecting the user's account or content.
     *
     * @return array{src: string, subject: array, enforcement: mixed, appeal: mixed, availableActions: array, latestAction: mixed, actionCount: int, createdAt: string, updatedAt: string, isRead: bool}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-appeal-actioned-subject
     */
    #[Post, NSID(self::appealActionedSubject)]
    public function appealActionedSubject(#[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, #[Union(['#actionRef', '#labelRef', '#takedownRef'])] ?array $action = null, ?string $reason = null, #[Ref('com.atproto.moderation.createReport#modTool')] ?array $modTool = null);

    /**
     * Get the authenticated account's current standing with this moderation service.
     *
     * @return array{src: string, standing: string, updatedAt: string, expiresAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-get-account-status
     */
    #[Get, NSID(self::getAccountStatus)]
    public function getAccountStatus(#[Format('did')] ?string $did = null);

    /**
     * Get a subject belonging to the authenticated account, including its moderation action history from this moderation service.
     *
     * @return array{src: string, isRead: bool, subject: array, record: mixed, enforcement: mixed, appeal: mixed, availableActions: array, actions: array{}[], cursor: string, reports: mixed, createdAt: string, updatedAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-get-actioned-subject
     */
    #[Get, NSID(self::getActionedSubject)]
    public function getActionedSubject(#[Format('uri')] string $subject, #[Format('did')] ?string $did = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * tools.ozone.inbox.getNotificationPreferences.
     *
     * @return array{preferences: array{push: bool}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-get-notification-preferences
     */
    #[Get, NSID(self::getNotificationPreferences)]
    public function getNotificationPreferences(#[Format('did')] ?string $did = null);

    /**
     * Get a moderation report submitted by the authenticated account to this moderation service.
     *
     * @return array{report: array{src: string, id: int, reasonType: string, reason: string, subject: array, record: mixed, status: string, createdAt: string, updatedAt: string}, resolution: array{outcome: string, actionTaken: string, scope: string, resolvedAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-get-report
     */
    #[Get, NSID(self::getReport)]
    public function getReport(int $id, #[Format('did')] ?string $did = null);

    /**
     * tools.ozone.inbox.getUnreadCount.
     *
     * @return array{unreadCounts: array{total: int, reports: int, subjects: int, accountStatus: int}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-get-unread-count
     */
    #[Get, NSID(self::getUnreadCount)]
    public function getUnreadCount(#[KnownValues(['reports', 'subjects', 'accountStatus'])] ?string $section = null, #[Format('did')] ?string $did = null);

    /**
     * List subjects belonging to the authenticated account that have moderation actions from this moderation service.
     *
     * @return array{cursor: string, subjects: array{src: string, subject: array, enforcement: array, appeal: array, availableActions: array, latestAction: array, actionCount: int, createdAt: string, updatedAt: string, isRead: bool}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-list-actioned-subjects
     */
    #[Get, NSID(self::listActionedSubjects)]
    public function listActionedSubjects(#[Format('did')] ?string $did = null, ?string $filter = 'all', ?string $sortField = 'updatedAt', ?string $sortDirection = 'desc', ?int $limit = 50, ?string $cursor = null);

    /**
     * tools.ozone.inbox.listNotifications.
     *
     * @return array{cursor: string, notifications: array{id: int, reason: string, target: array, isRead: bool, createdAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-list-notifications
     */
    #[Get, NSID(self::listNotifications)]
    public function listNotifications(#[KnownValues(['reports', 'subjects', 'accountStatus'])] ?string $section = null, ?array $reasons = null, ?bool $unreadOnly = null, ?int $limit = 50, ?string $cursor = null, #[Format('did')] ?string $did = null);

    /**
     * List moderation reports submitted by the authenticated account to this moderation service.
     *
     * @return array{cursor: string, reports: array{src: string, id: int, isRead: bool, reasonType: string, reason: string, lastActionTaken: string, scope: string, subject: array, status: string, createdAt: string, updatedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-list-reports
     */
    #[Get, NSID(self::listReports)]
    public function listReports(#[Format('did')] ?string $did = null, ?string $filter = 'all', ?string $sortField = 'updatedAt', ?string $sortDirection = 'desc', ?int $limit = 50, ?string $cursor = null);

    /**
     * tools.ozone.inbox.putNotificationPreferences.
     *
     * @return array{preferences: array{push: bool}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-put-notification-preferences
     */
    #[Post, NSID(self::putNotificationPreferences)]
    public function putNotificationPreferences(bool $push);

    /**
     * tools.ozone.inbox.updateSeen.
     *
     * @return array{seenAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-inbox-update-seen
     */
    #[Post, NSID(self::updateSeen)]
    public function updateSeen(array $sections, #[Format('datetime')] ?string $seenAt = null);
}
