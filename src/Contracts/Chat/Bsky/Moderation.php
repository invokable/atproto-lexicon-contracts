<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Moderation
{
    public const getActorMetadata = 'chat.bsky.moderation.getActorMetadata';
    public const getConvo = 'chat.bsky.moderation.getConvo';
    public const getConvoMembers = 'chat.bsky.moderation.getConvoMembers';
    public const getConvos = 'chat.bsky.moderation.getConvos';
    public const getMessageContext = 'chat.bsky.moderation.getMessageContext';
    public const updateActorAccess = 'chat.bsky.moderation.updateActorAccess';

    /**
     * chat.bsky.moderation.getActorMetadata.
     *
     * @return array{day: array{messagesSent: int, messagesReceived: int, convos: int, convosStarted: int}, month: array{messagesSent: int, messagesReceived: int, convos: int, convosStarted: int}, all: array{messagesSent: int, messagesReceived: int, convos: int, convosStarted: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-moderation-get-actor-metadata
     */
    #[Get, NSID(self::getActorMetadata)]
    public function getActorMetadata(#[Format('did')] string $actor);

    /**
     * Gets an existing conversation by its ID, for moderation purposes. Does not require the requester to be a member of the conversation.
     *
     * @return array{convo: array{id: string, rev: string, kind: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-moderation-get-convo
     */
    #[Get, NSID(self::getConvo)]
    public function getConvo(string $convoId);

    /**
     * Returns a paginated list of members from a conversation, for moderation purposes. Does not require the requester to be a member of the conversation.
     *
     * @return array{cursor: string, members: array{did: string, handle: string, displayName: string, avatar: string, associated: array, viewer: array, labels: array, createdAt: string, chatDisabled: bool, verification: array, kind: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-moderation-get-convo-members
     */
    #[Get, NSID(self::getConvoMembers)]
    public function getConvoMembers(string $convoId, ?int $limit = 50, ?string $cursor = null);

    /**
     * Gets existing conversations by their IDs, for moderation purposes. Does not require the requester to be a member of the conversations. Unknown IDs are silently omitted from the response.
     *
     * @return array{convos: array{id: string, rev: string, kind: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-moderation-get-convos
     */
    #[Get, NSID(self::getConvos)]
    public function getConvos(array $convoIds);

    /**
     * chat.bsky.moderation.getMessageContext.
     *
     * @return array{messages: array}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-moderation-get-message-context
     */
    #[Get, NSID(self::getMessageContext)]
    public function getMessageContext(string $messageId, ?string $convoId = null, ?int $before = 5, ?int $after = 5, ?int $maxInterleavedSystemMessages = 10);

    /**
     * chat.bsky.moderation.updateActorAccess.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-moderation-update-actor-access
     */
    #[Post, NSID(self::updateActorAccess)]
    public function updateActorAccess(#[Format('did')] string $actor, bool $allowAccess, ?string $ref = null);
}
