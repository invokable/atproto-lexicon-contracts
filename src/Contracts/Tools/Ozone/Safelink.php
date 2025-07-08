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

interface Safelink
{
    public const addRule = 'tools.ozone.safelink.addRule';
    public const queryEvents = 'tools.ozone.safelink.queryEvents';
    public const queryRules = 'tools.ozone.safelink.queryRules';
    public const removeRule = 'tools.ozone.safelink.removeRule';
    public const updateRule = 'tools.ozone.safelink.updateRule';

    /**
     * Add a new URL safety rule.
     *
     * @return array{id: int, eventType: mixed, url: string, pattern: mixed, action: mixed, reason: mixed, createdBy: string, createdAt: string, comment: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-safelink-add-rule
     */
    #[Post, NSID(self::addRule)]
    public function addRule(string $url, #[Ref('tools.ozone.safelink.defs#patternType')] string $pattern, #[Ref('tools.ozone.safelink.defs#actionType')] string $action, #[Ref('tools.ozone.safelink.defs#reasonType')] string $reason, ?string $comment = null, #[Format('did')] ?string $createdBy = null);

    /**
     * Query URL safety audit events.
     *
     * @return array{cursor: string, events: array{id: int, eventType: array, url: string, pattern: array, action: array, reason: array, createdBy: string, createdAt: string, comment: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-safelink-query-events
     */
    #[Post, NSID(self::queryEvents)]
    public function queryEvents(?string $cursor = null, ?int $limit = 50, ?array $urls = null, ?string $patternType = null, #[KnownValues(['asc', 'desc'])] ?string $sortDirection = 'desc');

    /**
     * Query URL safety rules.
     *
     * @return array{cursor: string, rules: array{url: string, pattern: array, action: array, reason: array, comment: string, createdBy: string, createdAt: string, updatedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-safelink-query-rules
     */
    #[Post, NSID(self::queryRules)]
    public function queryRules(?string $cursor = null, ?int $limit = 50, ?array $urls = null, ?string $patternType = null, ?array $actions = null, ?string $reason = null, #[Format('did')] ?string $createdBy = null, #[KnownValues(['asc', 'desc'])] ?string $sortDirection = 'desc');

    /**
     * Remove an existing URL safety rule.
     *
     * @return array{id: int, eventType: mixed, url: string, pattern: mixed, action: mixed, reason: mixed, createdBy: string, createdAt: string, comment: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-safelink-remove-rule
     */
    #[Post, NSID(self::removeRule)]
    public function removeRule(string $url, #[Ref('tools.ozone.safelink.defs#patternType')] string $pattern, ?string $comment = null, #[Format('did')] ?string $createdBy = null);

    /**
     * Update an existing URL safety rule.
     *
     * @return array{id: int, eventType: mixed, url: string, pattern: mixed, action: mixed, reason: mixed, createdBy: string, createdAt: string, comment: string}
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-safelink-update-rule
     */
    #[Post, NSID(self::updateRule)]
    public function updateRule(string $url, #[Ref('tools.ozone.safelink.defs#patternType')] string $pattern, #[Ref('tools.ozone.safelink.defs#actionType')] string $action, #[Ref('tools.ozone.safelink.defs#reasonType')] string $reason, ?string $comment = null, #[Format('did')] ?string $createdBy = null);
}
