<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Ageassurance
{
    public const begin = 'app.bsky.ageassurance.begin';
    public const getConfig = 'app.bsky.ageassurance.getConfig';
    public const getState = 'app.bsky.ageassurance.getState';

    /**
     * Initiate Age Assurance for an account.
     *
     * @return array{lastInitiatedAt: string, status: string, access: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-ageassurance-begin
     */
    #[Post, NSID(self::begin)]
    public function begin(string $email, string $language, string $countryCode, ?string $regionCode = null);

    /**
     * Returns Age Assurance configuration for use on the client.
     *
     * @return array{regions: array{countryCode: string, regionCode: string, minAccessAge: int, rules: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-ageassurance-get-config
     */
    #[Get, NSID(self::getConfig)]
    public function getConfig();

    /**
     * Returns server-computed Age Assurance state, if available, and any additional metadata needed to compute Age Assurance state client-side.
     *
     * @return array{state: array{lastInitiatedAt: string, status: array, access: array}, metadata: array{accountCreatedAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-ageassurance-get-state
     */
    #[Get, NSID(self::getState)]
    public function getState(string $countryCode, ?string $regionCode = null);
}
