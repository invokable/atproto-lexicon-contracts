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

interface Moderation
{
    public const cancelScheduledActions = 'tools.ozone.moderation.cancelScheduledActions';
    public const emitEvent = 'tools.ozone.moderation.emitEvent';
    public const getAccountTimeline = 'tools.ozone.moderation.getAccountTimeline';
    public const getEvent = 'tools.ozone.moderation.getEvent';
    public const getRecord = 'tools.ozone.moderation.getRecord';
    public const getRecords = 'tools.ozone.moderation.getRecords';
    public const getRepo = 'tools.ozone.moderation.getRepo';
    public const getReporterStats = 'tools.ozone.moderation.getReporterStats';
    public const getRepos = 'tools.ozone.moderation.getRepos';
    public const getSubjects = 'tools.ozone.moderation.getSubjects';
    public const listScheduledActions = 'tools.ozone.moderation.listScheduledActions';
    public const queryEvents = 'tools.ozone.moderation.queryEvents';
    public const queryStatuses = 'tools.ozone.moderation.queryStatuses';
    public const scheduleAction = 'tools.ozone.moderation.scheduleAction';
    public const searchRepos = 'tools.ozone.moderation.searchRepos';

    /**
     * Cancel all pending scheduled moderation actions for specified subjects.
     *
     * @return array{succeeded: array, failed: array{did: string, error: string, errorCode: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-cancel-scheduled-actions
     */
    #[Post, NSID(self::cancelScheduledActions)]
    public function cancelScheduledActions(#[Format('did')] array $subjects, ?string $comment = null);

    /**
     * Take a moderation action on an actor.
     *
     * @return array{id: int, event: array, subject: array, subjectBlobCids: array, createdBy: string, createdAt: string, creatorHandle: string, subjectHandle: string, modTool: mixed}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-emit-event
     */
    #[Post, NSID(self::emitEvent)]
    public function emitEvent(#[Union(['tools.ozone.moderation.defs#modEventTakedown', 'tools.ozone.moderation.defs#modEventAcknowledge', 'tools.ozone.moderation.defs#modEventEscalate', 'tools.ozone.moderation.defs#modEventComment', 'tools.ozone.moderation.defs#modEventLabel', 'tools.ozone.moderation.defs#modEventReport', 'tools.ozone.moderation.defs#modEventMute', 'tools.ozone.moderation.defs#modEventUnmute', 'tools.ozone.moderation.defs#modEventMuteReporter', 'tools.ozone.moderation.defs#modEventUnmuteReporter', 'tools.ozone.moderation.defs#modEventReverseTakedown', 'tools.ozone.moderation.defs#modEventResolveAppeal', 'tools.ozone.moderation.defs#modEventEmail', 'tools.ozone.moderation.defs#modEventDivert', 'tools.ozone.moderation.defs#modEventTag', 'tools.ozone.moderation.defs#accountEvent', 'tools.ozone.moderation.defs#identityEvent', 'tools.ozone.moderation.defs#recordEvent', 'tools.ozone.moderation.defs#modEventPriorityScore', 'tools.ozone.moderation.defs#ageAssuranceEvent', 'tools.ozone.moderation.defs#ageAssuranceOverrideEvent', 'tools.ozone.moderation.defs#revokeAccountCredentialsEvent', 'tools.ozone.moderation.defs#scheduleTakedownEvent', 'tools.ozone.moderation.defs#cancelScheduledTakedownEvent'])] array $event, #[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, #[Format('did')] string $createdBy, #[Format('cid')] ?array $subjectBlobCids = null, #[Ref('tools.ozone.moderation.defs#modTool')] ?array $modTool = null, ?string $externalId = null);

    /**
     * Get timeline of all available events of an account. This includes moderation events, account history and did history.
     *
     * @return array{timeline: array{day: string, summary: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-account-timeline
     */
    #[Get, NSID(self::getAccountTimeline)]
    public function getAccountTimeline(#[Format('did')] string $did);

    /**
     * Get details about a moderation event.
     *
     * @return array{id: int, event: array, subject: array, subjectBlobs: array{}[], createdBy: string, createdAt: string, modTool: mixed}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-event
     */
    #[Get, NSID(self::getEvent)]
    public function getEvent(int $id);

    /**
     * Get details about a record.
     *
     * @return array{uri: string, cid: string, value: mixed, blobs: array{}[], labels: array{ver: int, src: string, uri: string, cid: string, val: string, neg: bool, cts: string, exp: string, sig: mixed}[], indexedAt: string, moderation: mixed, repo: mixed}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-record
     */
    #[Get, NSID(self::getRecord)]
    public function getRecord(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null);

    /**
     * Get details about some records.
     *
     * @return array{records: array}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-records
     */
    #[Get, NSID(self::getRecords)]
    public function getRecords(#[Format('at-uri')] array $uris);

    /**
     * Get details about a repository.
     *
     * @return array{did: string, handle: string, email: string, relatedRecords: array, indexedAt: string, moderation: mixed, labels: array{ver: int, src: string, uri: string, cid: string, val: string, neg: bool, cts: string, exp: string, sig: mixed}[], invitedBy: array{code: string, available: int, disabled: bool, forAccount: string, createdBy: string, createdAt: string, uses: array}, invites: array{code: string, available: int, disabled: bool, forAccount: string, createdBy: string, createdAt: string, uses: array}[], invitesDisabled: bool, inviteNote: string, emailConfirmedAt: string, deactivatedAt: string, threatSignatures: array{property: string, value: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repo
     */
    #[Get, NSID(self::getRepo)]
    public function getRepo(#[Format('did')] string $did);

    /**
     * Get reporter stats for a list of users.
     *
     * @return array{stats: array{did: string, accountReportCount: int, recordReportCount: int, reportedAccountCount: int, reportedRecordCount: int, takendownAccountCount: int, takendownRecordCount: int, labeledAccountCount: int, labeledRecordCount: int}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-reporter-stats
     */
    #[Get, NSID(self::getReporterStats)]
    public function getReporterStats(#[Format('did')] array $dids);

    /**
     * Get details about some repositories.
     *
     * @return array{repos: array}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repos
     */
    #[Get, NSID(self::getRepos)]
    public function getRepos(#[Format('did')] array $dids);

    /**
     * Get details about subjects.
     *
     * @return array{subjects: array{type: array, subject: string, status: array, repo: array, profile: array, record: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-subjects
     */
    #[Get, NSID(self::getSubjects)]
    public function getSubjects(array $subjects);

    /**
     * List scheduled moderation actions with optional filtering.
     *
     * @return array{actions: array{id: int, action: string, eventData: mixed, did: string, executeAt: string, executeAfter: string, executeUntil: string, randomizeExecution: bool, createdBy: string, createdAt: string, updatedAt: string, status: string, lastExecutedAt: string, lastFailureReason: string, executionEventId: int}[], cursor: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-list-scheduled-actions
     */
    #[Post, NSID(self::listScheduledActions)]
    public function listScheduledActions(array $statuses, #[Format('datetime')] ?string $startsAfter = null, #[Format('datetime')] ?string $endsBefore = null, #[Format('did')] ?array $subjects = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * List moderation events related to a subject.
     *
     * @return array{cursor: string, events: array{id: int, event: array, subject: array, subjectBlobCids: array, createdBy: string, createdAt: string, creatorHandle: string, subjectHandle: string, modTool: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-query-events
     */
    #[Get, NSID(self::queryEvents)]
    public function queryEvents(?array $types = null, #[Format('did')] ?string $createdBy = null, ?string $sortDirection = 'desc', #[Format('datetime')] ?string $createdAfter = null, #[Format('datetime')] ?string $createdBefore = null, #[Format('uri')] ?string $subject = null, #[Format('nsid')] ?array $collections = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null, ?bool $includeAllUserRecords = null, ?int $limit = 50, ?bool $hasComment = null, ?string $comment = null, ?array $addedLabels = null, ?array $removedLabels = null, ?array $addedTags = null, ?array $removedTags = null, ?array $reportTypes = null, ?array $policies = null, ?array $modTool = null, ?string $batchId = null, #[KnownValues(['pending', 'assured', 'unknown', 'reset', 'blocked'])] ?string $ageAssuranceState = null, ?bool $withStrike = null, ?string $cursor = null);

    /**
     * View moderation statuses of subjects (record or repo).
     *
     * @return array{cursor: string, subjectStatuses: array{id: int, subject: array, hosting: array, subjectBlobCids: array, subjectRepoHandle: string, updatedAt: string, createdAt: string, reviewState: array, comment: string, priorityScore: int, muteUntil: string, muteReportingUntil: string, lastReviewedBy: string, lastReviewedAt: string, lastReportedAt: string, lastAppealedAt: string, takendown: bool, appealed: bool, suspendUntil: string, tags: array, accountStats: array, recordsStats: array, accountStrike: array, ageAssuranceState: string, ageAssuranceUpdatedBy: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-query-statuses
     */
    #[Get, NSID(self::queryStatuses)]
    public function queryStatuses(?int $queueCount = null, ?int $queueIndex = null, ?string $queueSeed = null, ?bool $includeAllUserRecords = null, #[Format('uri')] ?string $subject = null, ?string $comment = null, #[Format('datetime')] ?string $reportedAfter = null, #[Format('datetime')] ?string $reportedBefore = null, #[Format('datetime')] ?string $reviewedAfter = null, #[Format('datetime')] ?string $hostingDeletedAfter = null, #[Format('datetime')] ?string $hostingDeletedBefore = null, #[Format('datetime')] ?string $hostingUpdatedAfter = null, #[Format('datetime')] ?string $hostingUpdatedBefore = null, ?array $hostingStatuses = null, #[Format('datetime')] ?string $reviewedBefore = null, ?bool $includeMuted = null, ?bool $onlyMuted = null, #[KnownValues(['tools.ozone.moderation.defs#reviewOpen', 'tools.ozone.moderation.defs#reviewClosed', 'tools.ozone.moderation.defs#reviewEscalated', 'tools.ozone.moderation.defs#reviewNone'])] ?string $reviewState = null, #[Format('uri')] ?array $ignoreSubjects = null, #[Format('did')] ?string $lastReviewedBy = null, ?string $sortField = 'lastReportedAt', ?string $sortDirection = 'desc', ?bool $takendown = null, ?bool $appealed = null, ?int $limit = 50, ?array $tags = null, ?array $excludeTags = null, ?string $cursor = null, #[Format('nsid')] ?array $collections = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null, ?int $minAccountSuspendCount = null, ?int $minReportedRecordsCount = null, ?int $minTakendownRecordsCount = null, ?int $minPriorityScore = null, ?int $minStrikeCount = null, #[KnownValues(['pending', 'assured', 'unknown', 'reset', 'blocked'])] ?string $ageAssuranceState = null);

    /**
     * Schedule a moderation action to be executed at a future time.
     *
     * @return array{succeeded: array, failed: array{subject: string, error: string, errorCode: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-schedule-action
     */
    #[Post, NSID(self::scheduleAction)]
    public function scheduleAction(#[Union(['#takedown'])] array $action, #[Format('did')] array $subjects, #[Format('did')] string $createdBy, #[Ref('tools.ozone.moderation.scheduleAction#schedulingConfig')] array $scheduling, #[Ref('tools.ozone.moderation.defs#modTool')] ?array $modTool = null);

    /**
     * Find repositories based on a search term.
     *
     * @return array{cursor: string, repos: array{did: string, handle: string, email: string, relatedRecords: array, indexedAt: string, moderation: array, invitedBy: array, invitesDisabled: bool, inviteNote: string, deactivatedAt: string, threatSignatures: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-search-repos
     */
    #[Get, NSID(self::searchRepos)]
    public function searchRepos(?string $q = null, ?int $limit = 50, ?string $cursor = null);
}
