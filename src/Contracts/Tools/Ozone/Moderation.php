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

interface Moderation
{
    public const emitEvent = 'tools.ozone.moderation.emitEvent';
    public const getEvent = 'tools.ozone.moderation.getEvent';
    public const getRecord = 'tools.ozone.moderation.getRecord';
    public const getRecords = 'tools.ozone.moderation.getRecords';
    public const getRepo = 'tools.ozone.moderation.getRepo';
    public const getReporterStats = 'tools.ozone.moderation.getReporterStats';
    public const getRepos = 'tools.ozone.moderation.getRepos';
    public const getSubjects = 'tools.ozone.moderation.getSubjects';
    public const queryEvents = 'tools.ozone.moderation.queryEvents';
    public const queryStatuses = 'tools.ozone.moderation.queryStatuses';
    public const searchRepos = 'tools.ozone.moderation.searchRepos';

    /**
     * Take a moderation action on an actor.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-emit-event
     */
    #[Post, NSID(self::emitEvent)]
    public function emitEvent(#[Union(['tools.ozone.moderation.defs#modEventTakedown', 'tools.ozone.moderation.defs#modEventAcknowledge', 'tools.ozone.moderation.defs#modEventEscalate', 'tools.ozone.moderation.defs#modEventComment', 'tools.ozone.moderation.defs#modEventLabel', 'tools.ozone.moderation.defs#modEventReport', 'tools.ozone.moderation.defs#modEventMute', 'tools.ozone.moderation.defs#modEventUnmute', 'tools.ozone.moderation.defs#modEventMuteReporter', 'tools.ozone.moderation.defs#modEventUnmuteReporter', 'tools.ozone.moderation.defs#modEventReverseTakedown', 'tools.ozone.moderation.defs#modEventResolveAppeal', 'tools.ozone.moderation.defs#modEventEmail', 'tools.ozone.moderation.defs#modEventDivert', 'tools.ozone.moderation.defs#modEventTag', 'tools.ozone.moderation.defs#accountEvent', 'tools.ozone.moderation.defs#identityEvent', 'tools.ozone.moderation.defs#recordEvent', 'tools.ozone.moderation.defs#modEventPriorityScore'])] array $event, #[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, #[Format('did')] string $createdBy, #[Format('cid')] ?array $subjectBlobCids = null);

    /**
     * Get details about a moderation event.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-event
     */
    #[Get, NSID(self::getEvent)]
    public function getEvent(int $id);

    /**
     * Get details about a record.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-record
     */
    #[Get, NSID(self::getRecord)]
    public function getRecord(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null);

    /**
     * Get details about some records.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-records
     */
    #[Get, NSID(self::getRecords)]
    public function getRecords(#[Format('at-uri')] array $uris);

    /**
     * Get details about a repository.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repo
     */
    #[Get, NSID(self::getRepo)]
    public function getRepo(#[Format('did')] string $did);

    /**
     * Get reporter stats for a list of users.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-reporter-stats
     */
    #[Get, NSID(self::getReporterStats)]
    public function getReporterStats(#[Format('did')] array $dids);

    /**
     * Get details about some repositories.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repos
     */
    #[Get, NSID(self::getRepos)]
    public function getRepos(#[Format('did')] array $dids);

    /**
     * Get details about subjects.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-subjects
     */
    #[Get, NSID(self::getSubjects)]
    public function getSubjects(array $subjects);

    /**
     * List moderation events related to a subject.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-query-events
     */
    #[Get, NSID(self::queryEvents)]
    public function queryEvents(?array $types = null, #[Format('did')] ?string $createdBy = null, ?string $sortDirection = 'desc', #[Format('datetime')] ?string $createdAfter = null, #[Format('datetime')] ?string $createdBefore = null, #[Format('uri')] ?string $subject = null, #[Format('nsid')] ?array $collections = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null, ?bool $includeAllUserRecords = null, ?int $limit = 50, ?bool $hasComment = null, ?string $comment = null, ?array $addedLabels = null, ?array $removedLabels = null, ?array $addedTags = null, ?array $removedTags = null, ?array $reportTypes = null, ?array $policies = null, ?string $cursor = null);

    /**
     * View moderation statuses of subjects (record or repo).
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-query-statuses
     */
    #[Get, NSID(self::queryStatuses)]
    public function queryStatuses(?int $queueCount = null, ?int $queueIndex = null, ?string $queueSeed = null, ?bool $includeAllUserRecords = null, #[Format('uri')] ?string $subject = null, ?string $comment = null, #[Format('datetime')] ?string $reportedAfter = null, #[Format('datetime')] ?string $reportedBefore = null, #[Format('datetime')] ?string $reviewedAfter = null, #[Format('datetime')] ?string $hostingDeletedAfter = null, #[Format('datetime')] ?string $hostingDeletedBefore = null, #[Format('datetime')] ?string $hostingUpdatedAfter = null, #[Format('datetime')] ?string $hostingUpdatedBefore = null, ?array $hostingStatuses = null, #[Format('datetime')] ?string $reviewedBefore = null, ?bool $includeMuted = null, ?bool $onlyMuted = null, ?string $reviewState = null, #[Format('uri')] ?array $ignoreSubjects = null, #[Format('did')] ?string $lastReviewedBy = null, ?string $sortField = 'lastReportedAt', ?string $sortDirection = 'desc', ?bool $takendown = null, ?bool $appealed = null, ?int $limit = 50, ?array $tags = null, ?array $excludeTags = null, ?string $cursor = null, #[Format('nsid')] ?array $collections = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null, ?int $minAccountSuspendCount = null, ?int $minReportedRecordsCount = null, ?int $minTakendownRecordsCount = null, ?int $minPriorityScore = null);

    /**
     * Find repositories based on a search term.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-search-repos
     */
    #[Get, NSID(self::searchRepos)]
    public function searchRepos(?string $q = null, ?int $limit = 50, ?string $cursor = null);
}
