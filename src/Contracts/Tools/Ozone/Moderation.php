<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Deprecated;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Moderation
{
    public const emitEvent = 'tools.ozone.moderation.emitEvent';
    public const getEvent = 'tools.ozone.moderation.getEvent';
    public const getRecord = 'tools.ozone.moderation.getRecord';
    public const getRecords = 'tools.ozone.moderation.getRecords';
    public const getRepo = 'tools.ozone.moderation.getRepo';
    public const getRepos = 'tools.ozone.moderation.getRepos';
    public const queryEvents = 'tools.ozone.moderation.queryEvents';
    public const queryStatuses = 'tools.ozone.moderation.queryStatuses';
    public const searchRepos = 'tools.ozone.moderation.searchRepos';

    public const emitEventResponse = ['id' => 'int', 'event' => 'array', 'subject' => 'array', 'subjectBlobCids' => 'array', 'createdBy' => 'string', 'createdAt' => 'string', 'creatorHandle' => 'string', 'subjectHandle' => 'string'];
    public const getEventResponse = ['id' => 'int', 'event' => 'array', 'subject' => 'array', 'subjectBlobs' => [[]], 'createdBy' => 'string', 'createdAt' => 'string'];
    public const getRecordResponse = ['uri' => 'string', 'cid' => 'string', 'value' => 'mixed', 'blobs' => [[]], 'labels' => [['ver' => 'int', 'src' => 'string', 'uri' => 'string', 'cid' => 'string', 'val' => 'string', 'neg' => 'bool', 'cts' => 'string', 'exp' => 'string', 'sig' => 'mixed']], 'indexedAt' => 'string', 'moderation' => 'mixed', 'repo' => 'mixed'];
    public const getRecordsResponse = ['records' => 'array'];
    public const getRepoResponse = ['did' => 'string', 'handle' => 'string', 'email' => 'string', 'relatedRecords' => 'array', 'indexedAt' => 'string', 'moderation' => 'mixed', 'labels' => [['ver' => 'int', 'src' => 'string', 'uri' => 'string', 'cid' => 'string', 'val' => 'string', 'neg' => 'bool', 'cts' => 'string', 'exp' => 'string', 'sig' => 'mixed']], 'invitedBy' => ['code' => 'string', 'available' => 'int', 'disabled' => 'bool', 'forAccount' => 'string', 'createdBy' => 'string', 'createdAt' => 'string', 'uses' => 'array'], 'invites' => [['code' => 'string', 'available' => 'int', 'disabled' => 'bool', 'forAccount' => 'string', 'createdBy' => 'string', 'createdAt' => 'string', 'uses' => 'array']], 'invitesDisabled' => 'bool', 'inviteNote' => 'string', 'emailConfirmedAt' => 'string', 'deactivatedAt' => 'string', 'threatSignatures' => [['property' => 'string', 'value' => 'string']]];
    public const getReposResponse = ['repos' => 'array'];
    public const queryEventsResponse = ['cursor' => 'string', 'events' => [['id' => 'int', 'event' => 'array', 'subject' => 'array', 'subjectBlobCids' => 'array', 'createdBy' => 'string', 'createdAt' => 'string', 'creatorHandle' => 'string', 'subjectHandle' => 'string']]];
    public const queryStatusesResponse = ['cursor' => 'string', 'subjectStatuses' => [['id' => 'int', 'subject' => 'array', 'hosting' => 'array', 'subjectBlobCids' => 'array', 'subjectRepoHandle' => 'string', 'updatedAt' => 'string', 'createdAt' => 'string', 'reviewState' => 'array', 'comment' => 'string', 'muteUntil' => 'string', 'muteReportingUntil' => 'string', 'lastReviewedBy' => 'string', 'lastReviewedAt' => 'string', 'lastReportedAt' => 'string', 'lastAppealedAt' => 'string', 'takendown' => 'bool', 'appealed' => 'bool', 'suspendUntil' => 'string', 'tags' => 'array']]];
    public const searchReposResponse = ['cursor' => 'string', 'repos' => [['did' => 'string', 'handle' => 'string', 'email' => 'string', 'relatedRecords' => 'array', 'indexedAt' => 'string', 'moderation' => 'array', 'invitedBy' => 'array', 'invitesDisabled' => 'bool', 'inviteNote' => 'string', 'deactivatedAt' => 'string', 'threatSignatures' => 'array']]];

    /**
     * Take a moderation action on an actor.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-emit-event
     */
    #[Post, NSID(self::emitEvent)]
    #[Output(self::emitEventResponse)]
    public function emitEvent(#[Union(['tools.ozone.moderation.defs#modEventTakedown', 'tools.ozone.moderation.defs#modEventAcknowledge', 'tools.ozone.moderation.defs#modEventEscalate', 'tools.ozone.moderation.defs#modEventComment', 'tools.ozone.moderation.defs#modEventLabel', 'tools.ozone.moderation.defs#modEventReport', 'tools.ozone.moderation.defs#modEventMute', 'tools.ozone.moderation.defs#modEventUnmute', 'tools.ozone.moderation.defs#modEventMuteReporter', 'tools.ozone.moderation.defs#modEventUnmuteReporter', 'tools.ozone.moderation.defs#modEventReverseTakedown', 'tools.ozone.moderation.defs#modEventResolveAppeal', 'tools.ozone.moderation.defs#modEventEmail', 'tools.ozone.moderation.defs#modEventTag', 'tools.ozone.moderation.defs#accountEvent', 'tools.ozone.moderation.defs#identityEvent', 'tools.ozone.moderation.defs#recordEvent'])] array $event, #[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, #[Format('did')] string $createdBy, #[Format('cid')] ?array $subjectBlobCids = null);

    /**
     * Get details about a moderation event.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-event
     */
    #[Get, NSID(self::getEvent)]
    #[Output(self::getEventResponse)]
    public function getEvent(int $id);

    /**
     * Get details about a record.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-record
     */
    #[Get, NSID(self::getRecord)]
    #[Output(self::getRecordResponse)]
    public function getRecord(#[Format('at-uri')] string $uri, #[Format('cid')] ?string $cid = null);

    /**
     * Get details about some records.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-records
     */
    #[Get, NSID(self::getRecords)]
    #[Output(self::getRecordsResponse)]
    public function getRecords(#[Format('at-uri')] array $uris);

    /**
     * Get details about a repository.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repo
     */
    #[Get, NSID(self::getRepo)]
    #[Output(self::getRepoResponse)]
    public function getRepo(#[Format('did')] string $did);

    /**
     * Get details about some repositories.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repos
     */
    #[Get, NSID(self::getRepos)]
    #[Output(self::getReposResponse)]
    public function getRepos(#[Format('did')] array $dids);

    /**
     * List moderation events related to a subject.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-query-events
     */
    #[Get, NSID(self::queryEvents)]
    #[Output(self::queryEventsResponse)]
    public function queryEvents(?array $types = null, #[Format('did')] ?string $createdBy = null, ?string $sortDirection = 'desc', #[Format('datetime')] ?string $createdAfter = null, #[Format('datetime')] ?string $createdBefore = null, #[Format('uri')] ?string $subject = null, #[Format('nsid')] ?array $collections = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null, ?bool $includeAllUserRecords = null, ?int $limit = 50, ?bool $hasComment = null, ?string $comment = null, ?array $addedLabels = null, ?array $removedLabels = null, ?array $addedTags = null, ?array $removedTags = null, ?array $reportTypes = null, ?string $cursor = null);

    /**
     * View moderation statuses of subjects (record or repo).
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-query-statuses
     */
    #[Get, NSID(self::queryStatuses)]
    #[Output(self::queryStatusesResponse)]
    public function queryStatuses(?bool $includeAllUserRecords = null, #[Format('uri')] ?string $subject = null, ?string $comment = null, #[Format('datetime')] ?string $reportedAfter = null, #[Format('datetime')] ?string $reportedBefore = null, #[Format('datetime')] ?string $reviewedAfter = null, #[Format('datetime')] ?string $hostingDeletedAfter = null, #[Format('datetime')] ?string $hostingDeletedBefore = null, #[Format('datetime')] ?string $hostingUpdatedAfter = null, #[Format('datetime')] ?string $hostingUpdatedBefore = null, ?array $hostingStatuses = null, #[Format('datetime')] ?string $reviewedBefore = null, ?bool $includeMuted = null, ?bool $onlyMuted = null, ?string $reviewState = null, #[Format('uri')] ?array $ignoreSubjects = null, #[Format('did')] ?string $lastReviewedBy = null, ?string $sortField = 'lastReportedAt', ?string $sortDirection = 'desc', ?bool $takendown = null, ?bool $appealed = null, ?int $limit = 50, ?array $tags = null, ?array $excludeTags = null, ?string $cursor = null, #[Format('nsid')] ?array $collections = null, #[KnownValues(['account', 'record'])] ?string $subjectType = null);

    /**
     * Find repositories based on a search term.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-moderation-search-repos
     */
    #[Get, NSID(self::searchRepos)]
    #[Output(self::searchReposResponse)]
    public function searchRepos(#[Deprecated] ?string $term = null, ?string $q = null, ?int $limit = 50, ?string $cursor = null);
}
