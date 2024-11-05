<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

interface Moderation
{
    public const getActorMetadata = 'chat.bsky.moderation.getActorMetadata';
    public const getMessageContext = 'chat.bsky.moderation.getMessageContext';
    public const updateActorAccess = 'chat.bsky.moderation.updateActorAccess';

    /**
     * chat.bsky.moderation.getActorMetadata.
     *
     * ```
     * GET chat.bsky.moderation.getActorMetadata
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-moderation-get-actor-metadata
     */
    public function getActorMetadata(string $actor);

    /**
     * chat.bsky.moderation.getMessageContext.
     *
     * ```
     * GET chat.bsky.moderation.getMessageContext
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-moderation-get-message-context
     */
    public function getMessageContext(string $messageId, ?string $convoId = null, ?int $before = 5, ?int $after = 5);

    /**
     * chat.bsky.moderation.updateActorAccess.
     *
     * ```
     * POST chat.bsky.moderation.updateActorAccess
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-moderation-update-actor-access
     */
    public function updateActorAccess(string $actor, bool $allowAccess, ?string $ref = null);
}
