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
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Notification
{
    public const getPreferences = 'app.bsky.notification.getPreferences';
    public const getUnreadCount = 'app.bsky.notification.getUnreadCount';
    public const listActivitySubscriptions = 'app.bsky.notification.listActivitySubscriptions';
    public const listNotifications = 'app.bsky.notification.listNotifications';
    public const putActivitySubscription = 'app.bsky.notification.putActivitySubscription';
    public const putPreferences = 'app.bsky.notification.putPreferences';
    public const putPreferencesV2 = 'app.bsky.notification.putPreferencesV2';
    public const registerPush = 'app.bsky.notification.registerPush';
    public const updateSeen = 'app.bsky.notification.updateSeen';

    /**
     * Get notification-related preferences for an account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-get-preferences
     */
    #[Get, NSID(self::getPreferences)]
    public function getPreferences();

    /**
     * Count the number of unread notifications for the requesting account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-get-unread-count
     */
    #[Get, NSID(self::getUnreadCount)]
    public function getUnreadCount(?bool $priority = null, #[Format('datetime')] ?string $seenAt = null);

    /**
     * Enumerate all accounts to which the requesting account is subscribed to receive notifications for. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-list-activity-subscriptions
     */
    #[Get, NSID(self::listActivitySubscriptions)]
    public function listActivitySubscriptions(?int $limit = 50, ?string $cursor = null);

    /**
     * Enumerate notifications for the requesting account. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-list-notifications
     */
    #[Get, NSID(self::listNotifications)]
    public function listNotifications(?array $reasons = null, ?int $limit = 50, ?bool $priority = null, ?string $cursor = null, #[Format('datetime')] ?string $seenAt = null);

    /**
     * Puts an activity subscription entry. The key should be omitted for creation and provided for updates. Requires auth.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-notification-put-activity-subscription
     */
    #[Post, NSID(self::putActivitySubscription)]
    public function putActivitySubscription(#[Format('did')] string $subject, #[Ref('app.bsky.notification.defs#activitySubscription')] array $activitySubscription);

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
