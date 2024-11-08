<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

interface Setting
{
    public const listOptions = 'tools.ozone.setting.listOptions';
    public const removeOptions = 'tools.ozone.setting.removeOptions';
    public const upsertOption = 'tools.ozone.setting.upsertOption';

    /**
     * List settings with optional filtering.
     *
     * ```
     * GET tools.ozone.setting.listOptions
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-setting-list-options
     */
    public function listOptions(?int $limit = 50, ?string $cursor = null, ?string $scope = 'instance', ?string $prefix = null, ?array $keys = null);

    /**
     * Delete settings by key.
     *
     * ```
     * POST tools.ozone.setting.removeOptions
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-setting-remove-options
     */
    public function removeOptions(array $keys, string $scope);

    /**
     * Create or update setting option.
     *
     * ```
     * POST tools.ozone.setting.upsertOption
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-setting-upsert-option
     */
    public function upsertOption(string $key, string $scope, mixed $value, ?string $description = null, ?string $managerRole = null);
}
