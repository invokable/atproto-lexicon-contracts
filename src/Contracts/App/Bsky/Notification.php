<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Notification
{
    public const getUnreadCount = 'app.bsky.notification.getUnreadCount';
    public const listNotifications = 'app.bsky.notification.listNotifications';
    public const putPreferences = 'app.bsky.notification.putPreferences';
    public const registerPush = 'app.bsky.notification.registerPush';
    public const updateSeen = 'app.bsky.notification.updateSeen';

    /**
     * Count the number of unread notifications for the requesting account. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-get-unread-count
     */
    #[Get, NSID(self::getUnreadCount)]
    public function getUnreadCount(?bool $priority = null, ?string $seenAt = null);

    /**
     * Enumerate notifications for the requesting account. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-list-notifications
     */
    #[Get, NSID(self::listNotifications)]
    public function listNotifications(?int $limit = 50, ?bool $priority = null, ?string $cursor = null, ?string $seenAt = null);

    /**
     * Set notification-related preferences for an account. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-put-preferences
     */
    #[Post, NSID(self::putPreferences)]
    public function putPreferences(bool $priority);

    /**
     * Register to receive push notifications, via a specified service, for the requesting account. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-register-push
     */
    #[Post, NSID(self::registerPush)]
    public function registerPush(string $serviceDid, string $token, string $platform, string $appId);

    /**
     * Notify server that the requesting account has seen notifications. Requires auth.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-update-seen
     */
    #[Post, NSID(self::updateSeen)]
    public function updateSeen(string $seenAt);
}
