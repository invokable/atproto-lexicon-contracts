<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Convo
{
    public const acceptConvo = 'chat.bsky.convo.acceptConvo';
    public const addReaction = 'chat.bsky.convo.addReaction';
    public const deleteMessageForSelf = 'chat.bsky.convo.deleteMessageForSelf';
    public const getConvo = 'chat.bsky.convo.getConvo';
    public const getConvoAvailability = 'chat.bsky.convo.getConvoAvailability';
    public const getConvoForMembers = 'chat.bsky.convo.getConvoForMembers';
    public const getLog = 'chat.bsky.convo.getLog';
    public const getMessages = 'chat.bsky.convo.getMessages';
    public const leaveConvo = 'chat.bsky.convo.leaveConvo';
    public const listConvos = 'chat.bsky.convo.listConvos';
    public const muteConvo = 'chat.bsky.convo.muteConvo';
    public const removeReaction = 'chat.bsky.convo.removeReaction';
    public const sendMessage = 'chat.bsky.convo.sendMessage';
    public const sendMessageBatch = 'chat.bsky.convo.sendMessageBatch';
    public const unmuteConvo = 'chat.bsky.convo.unmuteConvo';
    public const updateAllRead = 'chat.bsky.convo.updateAllRead';
    public const updateRead = 'chat.bsky.convo.updateRead';

    public const acceptConvoResponse = ['rev' => 'string'];
    public const addReactionResponse = ['message' => ['id' => 'string', 'rev' => 'string', 'text' => 'string', 'facets' => 'array', 'embed' => 'array', 'reactions' => 'array', 'sender' => 'array', 'sentAt' => 'string']];
    public const deleteMessageForSelfResponse = ['id' => 'string', 'rev' => 'string', 'sender' => 'mixed', 'sentAt' => 'string'];
    public const getConvoResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']];
    public const getConvoAvailabilityResponse = ['canChat' => 'bool', 'convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']];
    public const getConvoForMembersResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']];
    public const getLogResponse = ['cursor' => 'string', 'logs' => 'array'];
    public const getMessagesResponse = ['cursor' => 'string', 'messages' => 'array'];
    public const leaveConvoResponse = ['convoId' => 'string', 'rev' => 'string'];
    public const listConvosResponse = ['cursor' => 'string', 'convos' => [['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']]];
    public const muteConvoResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']];
    public const removeReactionResponse = ['message' => ['id' => 'string', 'rev' => 'string', 'text' => 'string', 'facets' => 'array', 'embed' => 'array', 'reactions' => 'array', 'sender' => 'array', 'sentAt' => 'string']];
    public const sendMessageResponse = ['id' => 'string', 'rev' => 'string', 'text' => 'string', 'facets' => [['index' => 'array', 'features' => 'array']], 'embed' => 'array', 'reactions' => [[]], 'sender' => 'mixed', 'sentAt' => 'string'];
    public const sendMessageBatchResponse = ['items' => [['id' => 'string', 'rev' => 'string', 'text' => 'string', 'facets' => 'array', 'embed' => 'array', 'reactions' => 'array', 'sender' => 'array', 'sentAt' => 'string']]];
    public const unmuteConvoResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']];
    public const updateAllReadResponse = ['updatedCount' => 'int'];
    public const updateReadResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'lastReaction' => 'array', 'muted' => 'bool', 'status' => 'string', 'unreadCount' => 'int']];

    /**
     * chat.bsky.convo.acceptConvo.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-accept-convo
     */
    #[Post, NSID(self::acceptConvo)]
    #[Output(self::acceptConvoResponse)]
    public function acceptConvo(string $convoId);

    /**
     * Adds an emoji reaction to a message. Requires authentication. It is idempotent, so multiple calls from the same user with the same emoji result in a single reaction.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-add-reaction
     */
    #[Post, NSID(self::addReaction)]
    #[Output(self::addReactionResponse)]
    public function addReaction(string $convoId, string $messageId, string $value);

    /**
     * chat.bsky.convo.deleteMessageForSelf.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-delete-message-for-self
     */
    #[Post, NSID(self::deleteMessageForSelf)]
    #[Output(self::deleteMessageForSelfResponse)]
    public function deleteMessageForSelf(string $convoId, string $messageId);

    /**
     * chat.bsky.convo.getConvo.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo
     */
    #[Get, NSID(self::getConvo)]
    #[Output(self::getConvoResponse)]
    public function getConvo(string $convoId);

    /**
     * Get whether the requester and the other members can chat. If an existing convo is found for these members, it is returned.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo-availability
     */
    #[Get, NSID(self::getConvoAvailability)]
    #[Output(self::getConvoAvailabilityResponse)]
    public function getConvoAvailability(#[Format('did')] array $members);

    /**
     * chat.bsky.convo.getConvoForMembers.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo-for-members
     */
    #[Get, NSID(self::getConvoForMembers)]
    #[Output(self::getConvoForMembersResponse)]
    public function getConvoForMembers(#[Format('did')] array $members);

    /**
     * chat.bsky.convo.getLog.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-log
     */
    #[Get, NSID(self::getLog)]
    #[Output(self::getLogResponse)]
    public function getLog(?string $cursor = null);

    /**
     * chat.bsky.convo.getMessages.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-messages
     */
    #[Get, NSID(self::getMessages)]
    #[Output(self::getMessagesResponse)]
    public function getMessages(string $convoId, ?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.leaveConvo.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-leave-convo
     */
    #[Post, NSID(self::leaveConvo)]
    #[Output(self::leaveConvoResponse)]
    public function leaveConvo(string $convoId);

    /**
     * chat.bsky.convo.listConvos.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-list-convos
     */
    #[Get, NSID(self::listConvos)]
    #[Output(self::listConvosResponse)]
    public function listConvos(?int $limit = 50, ?string $cursor = null, #[KnownValues(['unread'])] ?string $readState = null, #[KnownValues(['request', 'accepted'])] ?string $status = null);

    /**
     * chat.bsky.convo.muteConvo.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-mute-convo
     */
    #[Post, NSID(self::muteConvo)]
    #[Output(self::muteConvoResponse)]
    public function muteConvo(string $convoId);

    /**
     * Removes an emoji reaction from a message. Requires authentication. It is idempotent, so multiple calls from the same user with the same emoji result in that reaction not being present, even if it already wasn't.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-remove-reaction
     */
    #[Post, NSID(self::removeReaction)]
    #[Output(self::removeReactionResponse)]
    public function removeReaction(string $convoId, string $messageId, string $value);

    /**
     * chat.bsky.convo.sendMessage.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-send-message
     */
    #[Post, NSID(self::sendMessage)]
    #[Output(self::sendMessageResponse)]
    public function sendMessage(string $convoId, #[Ref('chat.bsky.convo.defs#messageInput')] array $message);

    /**
     * chat.bsky.convo.sendMessageBatch.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-send-message-batch
     */
    #[Post, NSID(self::sendMessageBatch)]
    #[Output(self::sendMessageBatchResponse)]
    public function sendMessageBatch(#[Ref('chat.bsky.convo.sendMessageBatch#batchItem')] array $items);

    /**
     * chat.bsky.convo.unmuteConvo.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-unmute-convo
     */
    #[Post, NSID(self::unmuteConvo)]
    #[Output(self::unmuteConvoResponse)]
    public function unmuteConvo(string $convoId);

    /**
     * chat.bsky.convo.updateAllRead.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-update-all-read
     */
    #[Post, NSID(self::updateAllRead)]
    #[Output(self::updateAllReadResponse)]
    public function updateAllRead(#[KnownValues(['request', 'accepted'])] ?string $status = null);

    /**
     * chat.bsky.convo.updateRead.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-update-read
     */
    #[Post, NSID(self::updateRead)]
    #[Output(self::updateReadResponse)]
    public function updateRead(string $convoId, ?string $messageId = null);
}
