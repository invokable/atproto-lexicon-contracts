<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

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

    /**
     * chat.bsky.convo.deleteMessageForSelf.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-delete-message-for-self
     */
    #[Post, NSID(self::deleteMessageForSelf)]
    public function deleteMessageForSelf(string $convoId, string $messageId);

    /**
     * chat.bsky.convo.getConvo.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo
     */
    #[Get, NSID(self::getConvo)]
    public function getConvo(string $convoId);

    /**
     * chat.bsky.convo.getConvoForMembers.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo-for-members
     */
    #[Get, NSID(self::getConvoForMembers)]
    public function getConvoForMembers(array $members);

    /**
     * chat.bsky.convo.getLog.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-log
     */
    #[Get, NSID(self::getLog)]
    public function getLog(?string $cursor = null);

    /**
     * chat.bsky.convo.getMessages.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-messages
     */
    #[Get, NSID(self::getMessages)]
    public function getMessages(string $convoId, ?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.leaveConvo.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-leave-convo
     */
    #[Post, NSID(self::leaveConvo)]
    public function leaveConvo(string $convoId);

    /**
     * chat.bsky.convo.listConvos.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-list-convos
     */
    #[Get, NSID(self::listConvos)]
    public function listConvos(?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.muteConvo.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-mute-convo
     */
    #[Post, NSID(self::muteConvo)]
    public function muteConvo(string $convoId);

    /**
     * chat.bsky.convo.sendMessage.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-send-message
     */
    #[Post, NSID(self::sendMessage)]
    public function sendMessage(string $convoId, #[Ref('chat.bsky.convo.defs#messageInput')] array $message);

    /**
     * chat.bsky.convo.sendMessageBatch.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-send-message-batch
     */
    #[Post, NSID(self::sendMessageBatch)]
    public function sendMessageBatch(array $items);

    /**
     * chat.bsky.convo.unmuteConvo.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-unmute-convo
     */
    #[Post, NSID(self::unmuteConvo)]
    public function unmuteConvo(string $convoId);

    /**
     * chat.bsky.convo.updateRead.
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-update-read
     */
    #[Post, NSID(self::updateRead)]
    public function updateRead(string $convoId, ?string $messageId = null);
}
