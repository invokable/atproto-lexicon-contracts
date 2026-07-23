<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Actor
{
    public const deleteAccount = 'chat.bsky.actor.deleteAccount';
    public const exportAccountData = 'chat.bsky.actor.exportAccountData';
    public const getStatus = 'chat.bsky.actor.getStatus';

    /**
     * chat.bsky.actor.deleteAccount.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-actor-delete-account
     */
    #[Post, NSID(self::deleteAccount)]
    public function deleteAccount();

    /**
     * chat.bsky.actor.exportAccountData.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-actor-export-account-data
     */
    #[Get, NSID(self::exportAccountData)]
    public function exportAccountData();

    /**
     * Get the authenticated viewer's chat status: whether their account is chat-disabled and whether their group-membership additions are restricted to accounts they follow.
     *
     * @return array{chatDisabled: bool, canCreateGroups: bool, groupMemberLimit: int}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-actor-get-status
     */
    #[Get, NSID(self::getStatus)]
    public function getStatus();
}
