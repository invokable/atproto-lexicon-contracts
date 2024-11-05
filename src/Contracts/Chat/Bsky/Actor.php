<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

interface Actor
{
    public const deleteAccount = 'chat.bsky.actor.deleteAccount';
    public const exportAccountData = 'chat.bsky.actor.exportAccountData';

    /**
     * chat.bsky.actor.deleteAccount.
     *
     * ```
     * POST chat.bsky.actor.deleteAccount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-actor-delete-account
     */
    public function deleteAccount();

    /**
     * chat.bsky.actor.exportAccountData.
     *
     * ```
     * GET chat.bsky.actor.exportAccountData
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-actor-export-account-data
     */
    public function exportAccountData();
}
