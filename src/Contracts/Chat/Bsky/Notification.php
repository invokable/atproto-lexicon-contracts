<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Notification
{
    public const getPreferences = 'chat.bsky.notification.getPreferences';
    public const putPreferences = 'chat.bsky.notification.putPreferences';

    /**
     * Get the requesting account's chat notification preferences. Defaults are returned for accounts that have not set any preferences. Requires auth.
     *
     * @return array{preferences: array{chat: array, chatRequest: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-notification-get-preferences
     */
    #[Get, NSID(self::getPreferences)]
    public function getPreferences();

    /**
     * Set the requesting account's chat notification preferences. Only the provided preferences are updated; omitted preferences are left unchanged.
     *
     * @return array{preferences: array{chat: array, chatRequest: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-notification-put-preferences
     */
    #[Post, NSID(self::putPreferences)]
    public function putPreferences(#[Ref('chat.bsky.notification.defs#chatPreference')] ?array $chat = null, #[Ref('chat.bsky.notification.defs#chatPreference')] ?array $chatRequest = null);
}
