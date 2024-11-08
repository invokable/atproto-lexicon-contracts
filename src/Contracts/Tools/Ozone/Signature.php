<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Signature
{
    public const findCorrelation = 'tools.ozone.signature.findCorrelation';
    public const findRelatedAccounts = 'tools.ozone.signature.findRelatedAccounts';
    public const searchAccounts = 'tools.ozone.signature.searchAccounts';

    /**
     * Find all correlated threat signatures between 2 or more accounts.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-signature-find-correlation
     */
    #[Get, NSID(self::findCorrelation)]
    public function findCorrelation(array $dids);

    /**
     * Get accounts that share some matching threat signatures with the root account.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-signature-find-related-accounts
     */
    #[Get, NSID(self::findRelatedAccounts)]
    public function findRelatedAccounts(string $did, ?string $cursor = null, ?int $limit = 50);

    /**
     * Search for accounts that match one or more threat signature values.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-signature-search-accounts
     */
    #[Get, NSID(self::searchAccounts)]
    public function searchAccounts(array $values, ?string $cursor = null, ?int $limit = 50);
}
