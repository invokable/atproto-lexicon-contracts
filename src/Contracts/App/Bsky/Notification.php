<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

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
     * ```
     * GET app.bsky.notification.getUnreadCount
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-get-unread-count
     */
    public function getUnreadCount(?bool $priority = null, ?string $seenAt = null);

    /**
     * Enumerate notifications for the requesting account. Requires auth.
     *
     * ```
     * GET app.bsky.notification.listNotifications
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-list-notifications
     */
    public function listNotifications(?int $limit = 50, ?bool $priority = null, ?string $cursor = null, ?string $seenAt = null);

    /**
     * Set notification-related preferences for an account. Requires auth.
     *
     * ```
     * POST app.bsky.notification.putPreferences
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-put-preferences
     */
    public function putPreferences(bool $priority);

    /**
     * Register to receive push notifications, via a specified service, for the requesting account. Requires auth.
     *
     * ```
     * POST app.bsky.notification.registerPush
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-register-push
     */
    public function registerPush(string $serviceDid, string $token, string $platform, string $appId);

    /**
     * Notify server that the requesting account has seen notifications. Requires auth.
     *
     * ```
     * POST app.bsky.notification.updateSeen
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-notification-update-seen
     */
    public function updateSeen(string $seenAt);
}
