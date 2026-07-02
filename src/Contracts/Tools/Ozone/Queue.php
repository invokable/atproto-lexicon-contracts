<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Queue
{
    public const assignModerator = 'tools.ozone.queue.assignModerator';
    public const createQueue = 'tools.ozone.queue.createQueue';
    public const deleteQueue = 'tools.ozone.queue.deleteQueue';
    public const getAssignments = 'tools.ozone.queue.getAssignments';
    public const listQueues = 'tools.ozone.queue.listQueues';
    public const routeReports = 'tools.ozone.queue.routeReports';
    public const unassignModerator = 'tools.ozone.queue.unassignModerator';
    public const updateQueue = 'tools.ozone.queue.updateQueue';

    /**
     * Assign a user to a queue.
     *
     * @return array{id: int, did: string, moderator: array{did: string, disabled: bool, profile: array, createdAt: string, updatedAt: string, lastUpdatedBy: string, role: string}, queue: mixed, startAt: string, endAt: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-assign-moderator
     */
    #[Post, NSID(self::assignModerator)]
    public function assignModerator(int $queueId, string $did);

    /**
     * Create a new moderation queue. Will fail if the queue configuration conflicts with an existing queue.
     *
     * @return array{queue: array{id: int, name: string, subjectTypes: array, collection: string, reportTypes: array, description: string, createdBy: string, createdAt: string, updatedAt: string, enabled: bool, deletedAt: string, stats: array}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-create-queue
     */
    #[Post, NSID(self::createQueue)]
    public function createQueue(string $name, array $subjectTypes, array $reportTypes, #[Format('nsid')] ?string $collection = null, ?string $description = null);

    /**
     * Delete a moderation queue. Optionally migrate reports to another queue.
     *
     * @return array{deleted: bool, reportsMigrated: int}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-delete-queue
     */
    #[Post, NSID(self::deleteQueue)]
    public function deleteQueue(int $queueId, ?int $migrateToQueueId = null);

    /**
     * Get moderator assignments, optionally filtered by active status, queue, or moderator.
     *
     * @return array{cursor: string, assignments: array{id: int, did: string, moderator: array, queue: array, startAt: string, endAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-get-assignments
     */
    #[Get, NSID(self::getAssignments)]
    public function getAssignments(?bool $onlyActive = null, ?array $queueIds = null, #[Format('did')] ?array $dids = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * List all configured moderation queues with statistics.
     *
     * @return array{cursor: string, queues: array{id: int, name: string, subjectTypes: array, collection: string, reportTypes: array, description: string, createdBy: string, createdAt: string, updatedAt: string, enabled: bool, deletedAt: string, stats: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-list-queues
     */
    #[Get, NSID(self::listQueues)]
    public function listQueues(?bool $enabled = null, ?string $subjectType = null, ?string $collection = null, ?array $reportTypes = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Route reports within an ID range to matching queues based.
     *
     * @return array{assigned: int, unmatched: int}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-route-reports
     */
    #[Post, NSID(self::routeReports)]
    public function routeReports(int $startReportId, int $endReportId);

    /**
     * Remove a user's assignment from a queue.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-unassign-moderator
     */
    #[Post, NSID(self::unassignModerator)]
    public function unassignModerator(int $queueId, #[Format('did')] string $did);

    /**
     * Update queue properties. Currently only supports updating the name and enabled status to prevent configuration conflicts.
     *
     * @return array{queue: array{id: int, name: string, subjectTypes: array, collection: string, reportTypes: array, description: string, createdBy: string, createdAt: string, updatedAt: string, enabled: bool, deletedAt: string, stats: array}}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-queue-update-queue
     */
    #[Post, NSID(self::updateQueue)]
    public function updateQueue(int $queueId, ?string $name = null, ?bool $enabled = null, ?string $description = null);
}
