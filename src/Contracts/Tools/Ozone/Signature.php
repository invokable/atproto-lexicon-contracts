<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

interface Signature
{
    public const findCorrelation = 'tools.ozone.signature.findCorrelation';
    public const findRelatedAccounts = 'tools.ozone.signature.findRelatedAccounts';
    public const searchAccounts = 'tools.ozone.signature.searchAccounts';

    /**
     * Find all correlated threat signatures between 2 or more accounts.
     *
     * ```
     * GET tools.ozone.signature.findCorrelation
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-signature-find-correlation
     */
    public function findCorrelation(array $dids);

    /**
     * Get accounts that share some matching threat signatures with the root account.
     *
     * ```
     * GET tools.ozone.signature.findRelatedAccounts
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-signature-find-related-accounts
     */
    public function findRelatedAccounts(string $did, ?string $cursor = null, ?int $limit = 50);

    /**
     * Search for accounts that match one or more threat signature values.
     *
     * ```
     * GET tools.ozone.signature.searchAccounts
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-signature-search-accounts
     */
    public function searchAccounts(array $values, ?string $cursor = null, ?int $limit = 50);
}
