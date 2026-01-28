<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Contact
{
    public const dismissMatch = 'app.bsky.contact.dismissMatch';
    public const getMatches = 'app.bsky.contact.getMatches';
    public const getSyncStatus = 'app.bsky.contact.getSyncStatus';
    public const importContacts = 'app.bsky.contact.importContacts';
    public const removeData = 'app.bsky.contact.removeData';
    public const sendNotification = 'app.bsky.contact.sendNotification';
    public const startPhoneVerification = 'app.bsky.contact.startPhoneVerification';
    public const verifyPhone = 'app.bsky.contact.verifyPhone';

    /**
     * Removes a match that was found via contact import. It shouldn't appear again if the same contact is re-imported. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-dismiss-match
     */
    #[Post, NSID(self::dismissMatch)]
    public function dismissMatch(#[Format('did')] string $subject);

    /**
     * Returns the matched contacts (contacts that were mutually imported). Excludes dismissed matches. Requires authentication.
     *
     * @return array{cursor: string, matches: array{did: string, handle: string, displayName: string, pronouns: string, description: string, avatar: string, associated: array, indexedAt: string, createdAt: string, viewer: array, labels: array, verification: array, status: array, debug: mixed}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-get-matches
     */
    #[Get, NSID(self::getMatches)]
    public function getMatches(?int $limit = 50, ?string $cursor = null);

    /**
     * Gets the user's current contact import status. Requires authentication.
     *
     * @return array{syncStatus: array{syncedAt: string, matchesCount: int}}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-get-sync-status
     */
    #[Get, NSID(self::getSyncStatus)]
    public function getSyncStatus();

    /**
     * Import contacts for securely matching with other users. This follows the protocol explained in https://docs.bsky.app/blog/contact-import-rfc. Requires authentication.
     *
     * @return array{matchesAndContactIndexes: array{match: array, contactIndex: int}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-import-contacts
     */
    #[Post, NSID(self::importContacts)]
    public function importContacts(string $token, array $contacts);

    /**
     * Removes all stored hashes used for contact matching, existing matches, and sync status. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-remove-data
     */
    #[Post, NSID(self::removeData)]
    public function removeData();

    /**
     * System endpoint to send notifications related to contact imports. Requires role authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-send-notification
     */
    #[Post, NSID(self::sendNotification)]
    public function sendNotification(#[Format('did')] string $from, #[Format('did')] string $to);

    /**
     * Starts a phone verification flow. The phone passed will receive a code via SMS that should be passed to `app.bsky.contact.verifyPhone`. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-start-phone-verification
     */
    #[Post, NSID(self::startPhoneVerification)]
    public function startPhoneVerification(string $phone);

    /**
     * Verifies control over a phone number with a code received via SMS and starts a contact import session. Requires authentication.
     *
     * @return array{token: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-contact-verify-phone
     */
    #[Post, NSID(self::verifyPhone)]
    public function verifyPhone(string $phone, string $code);
}
