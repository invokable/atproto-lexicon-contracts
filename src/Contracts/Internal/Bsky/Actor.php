<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Internal\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Actor
{
    public const getProfiles = 'internal.bsky.actor.getProfiles';

    /**
     * Get detailed profile views of multiple actors, hydrating social proof (known followers) only for a subset of them. Intended for internal service-to-service use.
     *
     * @return array{profiles: array{did: string, handle: string, displayName: string, description: string, pronouns: string, website: string, avatar: string, banner: string, followersCount: int, followsCount: int, postsCount: int, associated: array, joinedViaStarterPack: array, indexedAt: string, createdAt: string, viewer: array, labels: array, pinnedPost: array, verification: array, status: array, debug: mixed}[]}
     *
     * @link https://docs.bsky.app/docs/api/internal-bsky-actor-get-profiles
     */
    #[Get, NSID(self::getProfiles)]
    public function getProfiles(#[Format('did')] array $dids, #[Format('did')] ?string $viewer = null, #[Format('did')] ?array $socialProof = null, ?bool $includeTakedowns = null);
}
