<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

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
     * ```
     * POST chat.bsky.convo.deleteMessageForSelf
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-delete-message-for-self
     */
    public function deleteMessageForSelf(string $convoId, string $messageId);

    /**
     * chat.bsky.convo.getConvo.
     *
     * ```
     * GET chat.bsky.convo.getConvo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo
     */
    public function getConvo(string $convoId);

    /**
     * chat.bsky.convo.getConvoForMembers.
     *
     * ```
     * GET chat.bsky.convo.getConvoForMembers
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo-for-members
     */
    public function getConvoForMembers(array $members);

    /**
     * chat.bsky.convo.getLog.
     *
     * ```
     * GET chat.bsky.convo.getLog
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-log
     */
    public function getLog(?string $cursor = null);

    /**
     * chat.bsky.convo.getMessages.
     *
     * ```
     * GET chat.bsky.convo.getMessages
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-get-messages
     */
    public function getMessages(string $convoId, ?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.leaveConvo.
     *
     * ```
     * POST chat.bsky.convo.leaveConvo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-leave-convo
     */
    public function leaveConvo(string $convoId);

    /**
     * chat.bsky.convo.listConvos.
     *
     * ```
     * GET chat.bsky.convo.listConvos
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-list-convos
     */
    public function listConvos(?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.muteConvo.
     *
     * ```
     * POST chat.bsky.convo.muteConvo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-mute-convo
     */
    public function muteConvo(string $convoId);

    /**
     * chat.bsky.convo.sendMessage.
     *
     * ```
     * POST chat.bsky.convo.sendMessage
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-send-message
     */
    public function sendMessage(string $convoId, array $message);

    /**
     * chat.bsky.convo.sendMessageBatch.
     *
     * ```
     * POST chat.bsky.convo.sendMessageBatch
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-send-message-batch
     */
    public function sendMessageBatch(array $items);

    /**
     * chat.bsky.convo.unmuteConvo.
     *
     * ```
     * POST chat.bsky.convo.unmuteConvo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-unmute-convo
     */
    public function unmuteConvo(string $convoId);

    /**
     * chat.bsky.convo.updateRead.
     *
     * ```
     * POST chat.bsky.convo.updateRead
     * ```
     *
     * @see https://docs.bsky.app/docs/api/chat-bsky-convo-update-read
     */
    public function updateRead(string $convoId, ?string $messageId = null);
}
