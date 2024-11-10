<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Moderation
{
    public const getActorMetadata = 'chat.bsky.moderation.getActorMetadata';
    public const getMessageContext = 'chat.bsky.moderation.getMessageContext';
    public const updateActorAccess = 'chat.bsky.moderation.updateActorAccess';

    /**
     * chat.bsky.moderation.getActorMetadata.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-moderation-get-actor-metadata
     */
    #[Get, NSID(self::getActorMetadata)]
    public function getActorMetadata(#[Format('did')] string $actor);

    /**
     * chat.bsky.moderation.getMessageContext.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-moderation-get-message-context
     */
    #[Get, NSID(self::getMessageContext)]
    public function getMessageContext(string $messageId, ?string $convoId = null, ?int $before = 5, ?int $after = 5);

    /**
     * chat.bsky.moderation.updateActorAccess.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-moderation-update-actor-access
     */
    #[Post, NSID(self::updateActorAccess)]
    public function updateActorAccess(#[Format('did')] string $actor, bool $allowAccess, ?string $ref = null);
}
