<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Setting
{
    public const listOptions = 'tools.ozone.setting.listOptions';
    public const removeOptions = 'tools.ozone.setting.removeOptions';
    public const upsertOption = 'tools.ozone.setting.upsertOption';

    /**
     * List settings with optional filtering.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-setting-list-options
     */
    #[Get, NSID(self::listOptions)]
    public function listOptions(?int $limit = 50, ?string $cursor = null, ?string $scope = 'instance', ?string $prefix = null, ?array $keys = null);

    /**
     * Delete settings by key.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-setting-remove-options
     */
    #[Post, NSID(self::removeOptions)]
    public function removeOptions(array $keys, string $scope);

    /**
     * Create or update setting option.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-setting-upsert-option
     */
    #[Post, NSID(self::upsertOption)]
    public function upsertOption(string $key, string $scope, mixed $value, ?string $description = null, ?string $managerRole = null);
}
