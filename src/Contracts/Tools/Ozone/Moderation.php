<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

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
     * ```
     * POST tools.ozone.moderation.emitEvent
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-emit-event
     */
    public function emitEvent(array $event, array $subject, string $createdBy, ?array $subjectBlobCids = null);

    /**
     * Get details about a moderation event.
     *
     * ```
     * GET tools.ozone.moderation.getEvent
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-event
     */
    public function getEvent(int $id);

    /**
     * Get details about a record.
     *
     * ```
     * GET tools.ozone.moderation.getRecord
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-record
     */
    public function getRecord(string $uri, ?string $cid = null);

    /**
     * Get details about some records.
     *
     * ```
     * GET tools.ozone.moderation.getRecords
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-records
     */
    public function getRecords(array $uris);

    /**
     * Get details about a repository.
     *
     * ```
     * GET tools.ozone.moderation.getRepo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repo
     */
    public function getRepo(string $did);

    /**
     * Get details about some repositories.
     *
     * ```
     * GET tools.ozone.moderation.getRepos
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-get-repos
     */
    public function getRepos(array $dids);

    /**
     * List moderation events related to a subject.
     *
     * ```
     * GET tools.ozone.moderation.queryEvents
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-query-events
     */
    public function queryEvents(?array $types = null, ?string $createdBy = null, ?string $sortDirection = 'desc', ?string $createdAfter = null, ?string $createdBefore = null, ?string $subject = null, ?array $collections = null, ?string $subjectType = null, ?bool $includeAllUserRecords = null, ?int $limit = 50, ?bool $hasComment = null, ?string $comment = null, ?array $addedLabels = null, ?array $removedLabels = null, ?array $addedTags = null, ?array $removedTags = null, ?array $reportTypes = null, ?string $cursor = null);

    /**
     * View moderation statuses of subjects (record or repo).
     *
     * ```
     * GET tools.ozone.moderation.queryStatuses
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-query-statuses
     */
    public function queryStatuses(?bool $includeAllUserRecords = null, ?string $subject = null, ?string $comment = null, ?string $reportedAfter = null, ?string $reportedBefore = null, ?string $reviewedAfter = null, ?string $hostingDeletedAfter = null, ?string $hostingDeletedBefore = null, ?string $hostingUpdatedAfter = null, ?string $hostingUpdatedBefore = null, ?array $hostingStatuses = null, ?string $reviewedBefore = null, ?bool $includeMuted = null, ?bool $onlyMuted = null, ?string $reviewState = null, ?array $ignoreSubjects = null, ?string $lastReviewedBy = null, ?string $sortField = 'lastReportedAt', ?string $sortDirection = 'desc', ?bool $takendown = null, ?bool $appealed = null, ?int $limit = 50, ?array $tags = null, ?array $excludeTags = null, ?string $cursor = null, ?array $collections = null, ?string $subjectType = null);

    /**
     * Find repositories based on a search term.
     *
     * ```
     * GET tools.ozone.moderation.searchRepos
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-moderation-search-repos
     */
    public function searchRepos(?string $term = null, ?string $q = null, ?int $limit = 50, ?string $cursor = null);
}
