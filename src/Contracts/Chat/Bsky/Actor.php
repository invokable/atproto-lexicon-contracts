<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Actor
{
    public const deleteAccount = 'chat.bsky.actor.deleteAccount';
    public const exportAccountData = 'chat.bsky.actor.exportAccountData';

    /**
     * chat.bsky.actor.deleteAccount.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-actor-delete-account
     */
    #[Post, NSID(self::deleteAccount)]
    public function deleteAccount();

    /**
     * chat.bsky.actor.exportAccountData.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-actor-export-account-data
     */
    #[Get, NSID(self::exportAccountData)]
    public function exportAccountData();
}
