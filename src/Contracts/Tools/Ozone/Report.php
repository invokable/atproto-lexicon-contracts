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
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Report
{
    public const assignModerator = 'tools.ozone.report.assignModerator';
    public const createActivity = 'tools.ozone.report.createActivity';
    public const getAssignments = 'tools.ozone.report.getAssignments';
    public const getHistoricalStats = 'tools.ozone.report.getHistoricalStats';
    public const getLatestReport = 'tools.ozone.report.getLatestReport';
    public const getLiveStats = 'tools.ozone.report.getLiveStats';
    public const getReport = 'tools.ozone.report.getReport';
    public const listActivities = 'tools.ozone.report.listActivities';
    public const queryActivities = 'tools.ozone.report.queryActivities';
    public const queryReports = 'tools.ozone.report.queryReports';
    public const reassignQueue = 'tools.ozone.report.reassignQueue';
    public const refreshStats = 'tools.ozone.report.refreshStats';
    public const unassignModerator = 'tools.ozone.report.unassignModerator';

    /**
     * Assign a report to a user. Defaults to the caller. Admins may assign to any moderator.
     *
     * @return array{id: int, did: string, moderator: array{did: string, disabled: bool, profile: array, createdAt: string, updatedAt: string, lastUpdatedBy: string, role: string}, queue: array{id: int, name: string, subjectTypes: array, collection: string, reportTypes: array, description: string, createdBy: string, createdAt: string, updatedAt: string, enabled: bool, deletedAt: string, stats: array}, reportId: int, startAt: string, endAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-assign-moderator
     */
    #[Post, NSID(self::assignModerator)]
    public function assignModerator(int $reportId, ?int $queueId = null, #[Format('did')] ?string $did = null, ?bool $isPermanent = null);

    /**
     * Register an activity on a report. For state-change activity types, validates the transition and updates report.status atomically.
     *
     * @return array{activity: array{id: int, reportId: int, activity: array, internalNote: string, publicNote: string, meta: mixed, isAutomated: bool, createdBy: string, moderator: array, report: array, createdAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-create-activity
     */
    #[Post, NSID(self::createActivity)]
    public function createActivity(int $reportId, #[Union(['tools.ozone.report.defs#queueActivity', 'tools.ozone.report.defs#assignmentActivity', 'tools.ozone.report.defs#escalationActivity', 'tools.ozone.report.defs#closeActivity', 'tools.ozone.report.defs#reopenActivity', 'tools.ozone.report.defs#noteActivity'])] array $activity, ?string $internalNote = null, ?string $publicNote = null, ?bool $isAutomated = null);

    /**
     * Get assignments for reports.
     *
     * @return array{cursor: string, assignments: array{id: int, did: string, moderator: array, queue: array, reportId: int, startAt: string, endAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-get-assignments
     */
    #[Get, NSID(self::getAssignments)]
    public function getAssignments(?bool $onlyActive = null, ?array $reportIds = null, #[Format('did')] ?array $dids = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Get historical daily report statistics. Returns a paginated list of daily stat snapshots, newest first. Filter by queue, moderator, or report type.
     *
     * @return array{stats: array{date: string, computedAt: string, pendingCount: int, actionedCount: int, escalatedCount: int, inboundCount: int, actionRate: int, avgHandlingTimeSec: int}[], cursor: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-get-historical-stats
     */
    #[Get, NSID(self::getHistoricalStats)]
    public function getHistoricalStats(?int $queueId = null, #[Format('did')] ?string $moderatorDid = null, ?array $reportTypes = null, #[Format('datetime')] ?string $startDate = null, #[Format('datetime')] ?string $endDate = null, ?int $limit = 30, ?string $cursor = null);

    /**
     * Get the most recent report.
     *
     * @return array{report: array{id: int, eventId: int, status: string, subject: array, reportType: array, reportedBy: string, reporter: array, comment: string, createdAt: string, updatedAt: string, queuedAt: string, actionEventIds: array, actions: array, actionNote: string, subjectStatus: array, relatedReportCount: int, assignment: array, queue: array, isMuted: bool}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-get-latest-report
     */
    #[Get, NSID(self::getLatestReport)]
    public function getLatestReport();

    /**
     * Get live report statistics from the past 24 hours. Filter by queue, moderator, or report type. Omit all parameters for aggregate stats.
     *
     * @return array{stats: array{pendingCount: int, actionedCount: int, escalatedCount: int, inboundCount: int, actionRate: int, avgHandlingTimeSec: int, lastUpdated: string}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-get-live-stats
     */
    #[Get, NSID(self::getLiveStats)]
    public function getLiveStats(?int $queueId = null, #[Format('did')] ?string $moderatorDid = null, ?array $reportTypes = null);

    /**
     * Get details about a single moderation report by ID.
     *
     * @return array{id: int, eventId: int, status: string, subject: array{type: array, subject: string, status: array, repo: array, profile: array, record: array}, reportType: string, reportedBy: string, reporter: array{type: array, subject: string, status: array, repo: array, profile: array, record: array}, comment: string, createdAt: string, updatedAt: string, queuedAt: string, actionEventIds: array, actions: array{id: int, event: array, subject: array, subjectBlobCids: array, createdBy: string, createdAt: string, creatorHandle: string, subjectHandle: string, modTool: array}[], actionNote: string, subjectStatus: array{id: int, subject: array, hosting: array, subjectBlobCids: array, subjectRepoHandle: string, updatedAt: string, createdAt: string, reviewState: array, comment: string, priorityScore: int, muteUntil: string, muteReportingUntil: string, lastReviewedBy: string, lastReviewedAt: string, lastReportedAt: string, lastAppealedAt: string, takendown: bool, appealed: bool, suspendUntil: string, tags: array, accountStats: array, recordsStats: array, accountStrike: array, ageAssuranceState: string, ageAssuranceUpdatedBy: string}, relatedReportCount: int, assignment: mixed, queue: array{id: int, name: string, subjectTypes: array, collection: string, reportTypes: array, description: string, createdBy: string, createdAt: string, updatedAt: string, enabled: bool, deletedAt: string, stats: array}, isMuted: bool}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-get-report
     */
    #[Get, NSID(self::getReport)]
    public function getReport(int $id);

    /**
     * List all activities for a report, sorted most-recent-first.
     *
     * @return array{activities: array{id: int, reportId: int, activity: array, internalNote: string, publicNote: string, meta: mixed, isAutomated: bool, createdBy: string, moderator: array, report: array, createdAt: string}[], cursor: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-list-activities
     */
    #[Get, NSID(self::listActivities)]
    public function listActivities(int $reportId, ?int $limit = 50, ?string $cursor = null);

    /**
     * Query report activities across all reports, ordered by createdAt. Used by downstream pollers; for per-report activity history use listActivities.
     *
     * @return array{activities: array{id: int, reportId: int, activity: array, internalNote: string, publicNote: string, meta: mixed, isAutomated: bool, createdBy: string, moderator: array, report: array, createdAt: string}[], cursor: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-query-activities
     */
    #[Get, NSID(self::queryActivities)]
    public function queryActivities(?array $activityTypes = null, #[Format('datetime')] ?string $createdAfter = null, #[Format('datetime')] ?string $createdBefore = null, ?string $sortDirection = 'desc', ?int $limit = 50, ?string $cursor = null);

    /**
     * View moderation reports. Reports are individual instances of content being reported, as opposed to subject statuses which aggregate reports at the subject level.
     *
     * @return array{cursor: string, reports: array{id: int, eventId: int, status: string, subject: array, reportType: array, reportedBy: string, reporter: array, comment: string, createdAt: string, updatedAt: string, queuedAt: string, actionEventIds: array, actions: array, actionNote: string, subjectStatus: array, relatedReportCount: int, assignment: array, queue: array, isMuted: bool}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-query-reports
     */
    #[Get, NSID(self::queryReports)]
    public function queryReports(#[KnownValues(['open', 'closed', 'escalated', 'queued', 'assigned'])] string $status, ?int $queueId = null, ?array $reportTypes = null, #[Format('uri')] ?string $subject = null, #[Format('did')] ?string $did = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null, #[Format('nsid')] ?array $collections = null, #[Format('datetime')] ?string $reportedAfter = null, #[Format('datetime')] ?string $reportedBefore = null, ?bool $isMuted = null, #[Format('did')] ?string $assignedTo = null, ?string $sortField = 'createdAt', ?string $sortDirection = 'desc', ?int $limit = 50, ?string $cursor = null);

    /**
     * Manually reassign a report to a different queue (or unassign it). Records a queueActivity entry on the report.
     *
     * @return array{report: array{id: int, eventId: int, status: string, subject: array, reportType: array, reportedBy: string, reporter: array, comment: string, createdAt: string, updatedAt: string, queuedAt: string, actionEventIds: array, actions: array, actionNote: string, subjectStatus: array, relatedReportCount: int, assignment: array, queue: array, isMuted: bool}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-reassign-queue
     */
    #[Post, NSID(self::reassignQueue)]
    public function reassignQueue(int $reportId, int $queueId, ?string $comment = null);

    /**
     * Recompute report statistics for a date range. Useful for backfilling after failures or data corrections.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-refresh-stats
     */
    #[Post, NSID(self::refreshStats)]
    public function refreshStats(string $startDate, string $endDate, ?array $queueIds = null);

    /**
     * Remove report assignment.
     *
     * @return array{id: int, did: string, moderator: array{did: string, disabled: bool, profile: array, createdAt: string, updatedAt: string, lastUpdatedBy: string, role: string}, queue: array{id: int, name: string, subjectTypes: array, collection: string, reportTypes: array, description: string, createdBy: string, createdAt: string, updatedAt: string, enabled: bool, deletedAt: string, stats: array}, reportId: int, startAt: string, endAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-report-unassign-moderator
     */
    #[Post, NSID(self::unassignModerator)]
    public function unassignModerator(int $reportId);
}
