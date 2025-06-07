<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Notification
{
    public const getPreferences = 'app.bsky.notification.getPreferences';
    public const getUnreadCount = 'app.bsky.notification.getUnreadCount';
    public const listNotifications = 'app.bsky.notification.listNotifications';
    public const putPreferences = 'app.bsky.notification.putPreferences';
    public const putPreferencesV2 = 'app.bsky.notification.putPreferencesV2';
    public const registerPush = 'app.bsky.notification.registerPush';
    public const updateSeen = 'app.bsky.notification.updateSeen';

    public const getPreferencesResponse = ['preferences' => ['chat' => 'array', 'follow' => 'array', 'like' => 'array', 'likeViaRepost' => 'array', 'mention' => 'array', 'quote' => 'array', 'reply' => 'array', 'repost' => 'array', 'repostViaRepost' => 'array', 'starterpackJoined' => 'array', 'subscribedPost' => 'array', 'unverified' => 'array', 'verified' => 'array']];
    public const getUnreadCountResponse = ['count' => 'int'];
    public const listNotificationsResponse = ['cursor' => 'string', 'notifications' => [['uri' => 'string', 'cid' => 'string', 'author' => 'array', 'reason' => 'string', 'reasonSubject' => 'string', 'record' => 'mixed', 'isRead' => 'bool', 'indexedAt' => 'string', 'labels' => 'array']], 'priority' => 'bool', 'seenAt' => 'string'];
    public const putPreferencesV2Response = ['preferences' => ['chat' => 'array', 'follow' => 'array', 'like' => 'array', 'likeViaRepost' => 'array', 'mention' => 'array', 'quote' => 'array', 'reply' => 'array', 'repost' => 'array', 'repostViaRepost' => 'array', 'starterpackJoined' => 'array', 'subscribedPost' => 'array', 'unverified' => 'array', 'verified' => 'array']];

    /**
     * Get notification-related preferences for an account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-get-preferences
     */
    #[Get, NSID(self::getPreferences)]
    #[Output(self::getPreferencesResponse)]
    public function getPreferences();

    /**
     * Count the number of unread notifications for the requesting account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-get-unread-count
     */
    #[Get, NSID(self::getUnreadCount)]
    #[Output(self::getUnreadCountResponse)]
    public function getUnreadCount(?bool $priority = null, #[Format('datetime')] ?string $seenAt = null);

    /**
     * Enumerate notifications for the requesting account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-list-notifications
     */
    #[Get, NSID(self::listNotifications)]
    #[Output(self::listNotificationsResponse)]
    public function listNotifications(?array $reasons = null, ?int $limit = 50, ?bool $priority = null, ?string $cursor = null, #[Format('datetime')] ?string $seenAt = null);

    /**
     * Set notification-related preferences for an account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-put-preferences
     */
    #[Post, NSID(self::putPreferences)]
    public function putPreferences(bool $priority);

    /**
     * Set notification-related preferences for an account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-put-preferences-v2
     */
    #[Post, NSID(self::putPreferencesV2)]
    #[Output(self::putPreferencesV2Response)]
    public function putPreferencesV2(#[Ref('app.bsky.notification.defs#chatPreference')] ?array $chat = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $follow = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $like = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $likeViaRepost = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $mention = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $quote = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $reply = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $repost = null, #[Ref('app.bsky.notification.defs#filterablePreference')] ?array $repostViaRepost = null, #[Ref('app.bsky.notification.defs#preference')] ?array $starterpackJoined = null, #[Ref('app.bsky.notification.defs#preference')] ?array $subscribedPost = null, #[Ref('app.bsky.notification.defs#preference')] ?array $unverified = null, #[Ref('app.bsky.notification.defs#preference')] ?array $verified = null);

    /**
     * Register to receive push notifications, via a specified service, for the requesting account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-register-push
     */
    #[Post, NSID(self::registerPush)]
    public function registerPush(#[Format('did')] string $serviceDid, string $token, #[KnownValues(['ios', 'android', 'web'])] string $platform, string $appId);

    /**
     * Notify server that the requesting account has seen notifications. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-update-seen
     */
    #[Post, NSID(self::updateSeen)]
    public function updateSeen(#[Format('datetime')] string $seenAt);
}
