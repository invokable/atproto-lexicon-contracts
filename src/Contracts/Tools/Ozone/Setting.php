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

interface Setting
{
    public const listOptions = 'tools.ozone.setting.listOptions';
    public const removeOptions = 'tools.ozone.setting.removeOptions';
    public const upsertOption = 'tools.ozone.setting.upsertOption';

    /**
     * List settings with optional filtering.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-setting-list-options
     */
    #[Get, NSID(self::listOptions)]
    public function listOptions(?int $limit = 50, ?string $cursor = null, #[KnownValues(['instance', 'personal'])] ?string $scope = 'instance', ?string $prefix = null, #[Format('nsid')] ?array $keys = null);

    /**
     * Delete settings by key.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-setting-remove-options
     */
    #[Post, NSID(self::removeOptions)]
    public function removeOptions(#[Format('nsid')] array $keys, #[KnownValues(['instance', 'personal'])] string $scope);

    /**
     * Create or update setting option.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-setting-upsert-option
     */
    #[Post, NSID(self::upsertOption)]
    public function upsertOption(#[Format('nsid')] string $key, #[KnownValues(['instance', 'personal'])] string $scope, mixed $value, ?string $description = null, #[KnownValues(['tools.ozone.team.defs#roleModerator', 'tools.ozone.team.defs#roleTriage', 'tools.ozone.team.defs#roleAdmin'])] ?string $managerRole = null);
}
