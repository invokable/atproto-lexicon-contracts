<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
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

    /**
     * Take a moderation action on an actor.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-emit-event
     */
    #[Post, NSID(self::emitEvent)]
    public function emitEvent(#[Union(['tools.ozone.moderation.defs#modEventTakedown', 'tools.ozone.moderation.defs#modEventAcknowledge', 'tools.ozone.moderation.defs#modEventEscalate', 'tools.ozone.moderation.defs#modEventComment', 'tools.ozone.moderation.defs#modEventLabel', 'tools.ozone.moderation.defs#modEventReport', 'tools.ozone.moderation.defs#modEventMute', 'tools.ozone.moderation.defs#modEventUnmute', 'tools.ozone.moderation.defs#modEventMuteReporter', 'tools.ozone.moderation.defs#modEventUnmuteReporter', 'tools.ozone.moderation.defs#modEventReverseTakedown', 'tools.ozone.moderation.defs#modEventResolveAppeal', 'tools.ozone.moderation.defs#modEventEmail', 'tools.ozone.moderation.defs#modEventTag', 'tools.ozone.moderation.defs#accountEvent', 'tools.ozone.moderation.defs#identityEvent', 'tools.ozone.moderation.defs#recordEvent'])] array $event, #[Union(['com.atproto.admin.defs#repoRef', 'com.atproto.repo.strongRef'])] array $subject, string $createdBy, ?array $subjectBlobCids = null);

    /**
     * Get details about a moderation event.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-event
     */
    #[Get, NSID(self::getEvent)]
    public function getEvent(int $id);

    /**
     * Get details about a record.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-record
     */
    #[Get, NSID(self::getRecord)]
    public function getRecord(string $uri, ?string $cid = null);

    /**
     * Get details about some records.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-records
     */
    #[Get, NSID(self::getRecords)]
    public function getRecords(array $uris);

    /**
     * Get details about a repository.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repo
     */
    #[Get, NSID(self::getRepo)]
    public function getRepo(string $did);

    /**
     * Get details about some repositories.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repos
     */
    #[Get, NSID(self::getRepos)]
    public function getRepos(array $dids);

    /**
     * List moderation events related to a subject.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-query-events
     */
    #[Get, NSID(self::queryEvents)]
    public function queryEvents(?array $types = null, ?string $createdBy = null, ?string $sortDirection = 'desc', ?string $createdAfter = null, ?string $createdBefore = null, ?string $subject = null, ?array $collections = null, ?string $subjectType = null, ?bool $includeAllUserRecords = null, ?int $limit = 50, ?bool $hasComment = null, ?string $comment = null, ?array $addedLabels = null, ?array $removedLabels = null, ?array $addedTags = null, ?array $removedTags = null, ?array $reportTypes = null, ?string $cursor = null);

    /**
     * View moderation statuses of subjects (record or repo).
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-query-statuses
     */
    #[Get, NSID(self::queryStatuses)]
    public function queryStatuses(?bool $includeAllUserRecords = null, ?string $subject = null, ?string $comment = null, ?string $reportedAfter = null, ?string $reportedBefore = null, ?string $reviewedAfter = null, ?string $hostingDeletedAfter = null, ?string $hostingDeletedBefore = null, ?string $hostingUpdatedAfter = null, ?string $hostingUpdatedBefore = null, ?array $hostingStatuses = null, ?string $reviewedBefore = null, ?bool $includeMuted = null, ?bool $onlyMuted = null, ?string $reviewState = null, ?array $ignoreSubjects = null, ?string $lastReviewedBy = null, ?string $sortField = 'lastReportedAt', ?string $sortDirection = 'desc', ?bool $takendown = null, ?bool $appealed = null, ?int $limit = 50, ?array $tags = null, ?array $excludeTags = null, ?string $cursor = null, ?array $collections = null, ?string $subjectType = null);

    /**
     * Find repositories based on a search term.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-search-repos
     */
    #[Get, NSID(self::searchRepos)]
    public function searchRepos(?string $term = null, ?string $q = null, ?int $limit = 50, ?string $cursor = null);
}
