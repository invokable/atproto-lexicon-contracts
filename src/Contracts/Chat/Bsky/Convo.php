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

    /**
     * chat.bsky.convo.acceptConvo.
     *
     * @return array{rev: string}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-accept-convo
     */
    #[Post, NSID(self::acceptConvo)]
    public function acceptConvo(string $convoId);

    /**
     * Adds an emoji reaction to a message. Requires authentication. It is idempotent, so multiple calls from the same user with the same emoji result in a single reaction.
     *
     * @return array{message: array{id: string, rev: string, text: string, facets: array, embed: array, reactions: array, sender: array, sentAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-add-reaction
     */
    #[Post, NSID(self::addReaction)]
    public function addReaction(string $convoId, string $messageId, string $value);

    /**
     * chat.bsky.convo.deleteMessageForSelf.
     *
     * @return array{id: string, rev: string, sender: mixed, sentAt: string}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-delete-message-for-self
     */
    #[Post, NSID(self::deleteMessageForSelf)]
    public function deleteMessageForSelf(string $convoId, string $messageId);

    /**
     * chat.bsky.convo.getConvo.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo
     */
    #[Get, NSID(self::getConvo)]
    public function getConvo(string $convoId);

    /**
     * Get whether the requester and the other members can chat. If an existing convo is found for these members, it is returned.
     *
     * @return array{canChat: bool, convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo-availability
     */
    #[Get, NSID(self::getConvoAvailability)]
    public function getConvoAvailability(#[Format('did')] array $members);

    /**
     * chat.bsky.convo.getConvoForMembers.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-convo-for-members
     */
    #[Get, NSID(self::getConvoForMembers)]
    public function getConvoForMembers(#[Format('did')] array $members);

    /**
     * chat.bsky.convo.getLog.
     *
     * @return array{cursor: string, logs: array}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-log
     */
    #[Get, NSID(self::getLog)]
    public function getLog(?string $cursor = null);

    /**
     * chat.bsky.convo.getMessages.
     *
     * @return array{cursor: string, messages: array}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-get-messages
     */
    #[Get, NSID(self::getMessages)]
    public function getMessages(string $convoId, ?int $limit = 50, ?string $cursor = null);

    /**
     * chat.bsky.convo.leaveConvo.
     *
     * @return array{convoId: string, rev: string}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-leave-convo
     */
    #[Post, NSID(self::leaveConvo)]
    public function leaveConvo(string $convoId);

    /**
     * chat.bsky.convo.listConvos.
     *
     * @return array{cursor: string, convos: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}[]}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-list-convos
     */
    #[Get, NSID(self::listConvos)]
    public function listConvos(?int $limit = 50, ?string $cursor = null, #[KnownValues(['unread'])] ?string $readState = null, #[KnownValues(['request', 'accepted'])] ?string $status = null);

    /**
     * chat.bsky.convo.muteConvo.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-mute-convo
     */
    #[Post, NSID(self::muteConvo)]
    public function muteConvo(string $convoId);

    /**
     * Removes an emoji reaction from a message. Requires authentication. It is idempotent, so multiple calls from the same user with the same emoji result in that reaction not being present, even if it already wasn't.
     *
     * @return array{message: array{id: string, rev: string, text: string, facets: array, embed: array, reactions: array, sender: array, sentAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-remove-reaction
     */
    #[Post, NSID(self::removeReaction)]
    public function removeReaction(string $convoId, string $messageId, string $value);

    /**
     * chat.bsky.convo.sendMessage.
     *
     * @return array{id: string, rev: string, text: string, facets: array{index: array, features: array}[], embed: array, reactions: array{}[], sender: mixed, sentAt: string}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-send-message
     */
    #[Post, NSID(self::sendMessage)]
    public function sendMessage(string $convoId, #[Ref('chat.bsky.convo.defs#messageInput')] array $message);

    /**
     * chat.bsky.convo.sendMessageBatch.
     *
     * @return array{items: array{id: string, rev: string, text: string, facets: array, embed: array, reactions: array, sender: array, sentAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-send-message-batch
     */
    #[Post, NSID(self::sendMessageBatch)]
    public function sendMessageBatch(#[Ref('chat.bsky.convo.sendMessageBatch#batchItem')] array $items);

    /**
     * chat.bsky.convo.unmuteConvo.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-unmute-convo
     */
    #[Post, NSID(self::unmuteConvo)]
    public function unmuteConvo(string $convoId);

    /**
     * chat.bsky.convo.updateAllRead.
     *
     * @return array{updatedCount: int}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-update-all-read
     */
    #[Post, NSID(self::updateAllRead)]
    public function updateAllRead(#[KnownValues(['request', 'accepted'])] ?string $status = null);

    /**
     * chat.bsky.convo.updateRead.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: string, unreadCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-convo-update-read
     */
    #[Post, NSID(self::updateRead)]
    public function updateRead(string $convoId, ?string $messageId = null);
}
