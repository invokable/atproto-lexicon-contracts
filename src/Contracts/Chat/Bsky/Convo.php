<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Convo
{
    public const deleteMessageForSelf = 'chat.bsky.convo.deleteMessageForSelf';
    public const getConvo = 'chat.bsky.convo.getConvo';
    public const getConvoForMembers = 'chat.bsky.convo.getConvoForMembers';
    public const getLog = 'chat.bsky.convo.getLog';
    public const getMessages = 'chat.bsky.convo.getMessages';
    public const leaveConvo = 'chat.bsky.convo.leaveConvo';
    public const listConvos = 'chat.bsky.convo.listConvos';
    public const muteConvo = 'chat.bsky.convo.muteConvo';
    public const sendMessage = 'chat.bsky.convo.sendMessage';
    public const sendMessageBatch = 'chat.bsky.convo.sendMessageBatch';
    public const unmuteConvo = 'chat.bsky.convo.unmuteConvo';
    public const updateRead = 'chat.bsky.convo.updateRead';

    public const deleteMessageForSelfResponse = ['id' => 'string', 'rev' => 'string', 'sender' => 'mixed', 'sentAt' => 'string'];
    public const getConvoResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'muted' => 'bool', 'opened' => 'bool', 'unreadCount' => 'int']];
    public const getConvoForMembersResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'muted' => 'bool', 'opened' => 'bool', 'unreadCount' => 'int']];
    public const getLogResponse = ['cursor' => 'string', 'logs' => 'array'];
    public const getMessagesResponse = ['cursor' => 'string', 'messages' => 'array'];
    public const leaveConvoResponse = ['convoId' => 'string', 'rev' => 'string'];
    public const listConvosResponse = ['cursor' => 'string', 'convos' => [['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'muted' => 'bool', 'opened' => 'bool', 'unreadCount' => 'int']]];
    public const muteConvoResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'muted' => 'bool', 'opened' => 'bool', 'unreadCount' => 'int']];
    public const sendMessageResponse = ['id' => 'string', 'rev' => 'string', 'text' => 'string', 'facets' => [['index' => 'array', 'features' => 'array']], 'embed' => 'array', 'sender' => 'mixed', 'sentAt' => 'string'];
    public const sendMessageBatchResponse = ['items' => [['id' => 'string', 'rev' => 'string', 'text' => 'string', 'facets' => 'array', 'embed' => 'array', 'sender' => 'array', 'sentAt' => 'string']]];
    public const unmuteConvoResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'muted' => 'bool', 'opened' => 'bool', 'unreadCount' => 'int']];
    public const updateReadResponse = ['convo' => ['id' => 'string', 'rev' => 'string', 'members' => 'array', 'lastMessage' => 'array', 'muted' => 'bool', 'opened' => 'bool', 'unreadCount' => 'int']];

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
    public function listConvos(?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.muteConvo.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-mute-convo
     */
    #[Post, NSID(self::muteConvo)]
    #[Output(self::muteConvoResponse)]
    public function muteConvo(string $convoId);

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
     * chat.bsky.convo.updateRead.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-update-read
     */
    #[Post, NSID(self::updateRead)]
    #[Output(self::updateReadResponse)]
    public function updateRead(string $convoId, ?string $messageId = null);
}
