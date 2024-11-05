<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

interface Set
{
    public const addValues = 'tools.ozone.set.addValues';
    public const deleteSet = 'tools.ozone.set.deleteSet';
    public const deleteValues = 'tools.ozone.set.deleteValues';
    public const getValues = 'tools.ozone.set.getValues';
    public const querySets = 'tools.ozone.set.querySets';
    public const upsertSet = 'tools.ozone.set.upsertSet';

    /**
     * Add values to a specific set. Attempting to add values to a set that does not exist will result in an error.
     *
     * ```
     * POST tools.ozone.set.addValues
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-set-add-values
     */
    public function addValues(string $name, array $values);

    /**
     * Delete an entire set. Attempting to delete a set that does not exist will result in an error.
     *
     * ```
     * POST tools.ozone.set.deleteSet
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-set-delete-set
     */
    public function deleteSet(string $name);

    /**
     * Delete values from a specific set. Attempting to delete values that are not in the set will not result in an error.
     *
     * ```
     * POST tools.ozone.set.deleteValues
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-set-delete-values
     */
    public function deleteValues(string $name, array $values);

    /**
     * Get a specific set and its values.
     *
     * ```
     * GET tools.ozone.set.getValues
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-set-get-values
     */
    public function getValues(string $name, ?int $limit = 100, ?string $cursor = null);

    /**
     * Query available sets.
     *
     * ```
     * GET tools.ozone.set.querySets
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-set-query-sets
     */
    public function querySets(?int $limit = 50, ?string $cursor = null, ?string $namePrefix = null, ?string $sortBy = 'name', ?string $sortDirection = 'asc');

    /**
     * Create or update set metadata.
     *
     * ```
     * POST tools.ozone.set.upsertSet
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-set-upsert-set
     */
    public function upsertSet();
}
