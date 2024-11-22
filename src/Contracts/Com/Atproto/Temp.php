<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Temp
{
    public const addReservedHandle = 'com.atproto.temp.addReservedHandle';
    public const checkSignupQueue = 'com.atproto.temp.checkSignupQueue';
    public const fetchLabels = 'com.atproto.temp.fetchLabels';
    public const requestPhoneVerification = 'com.atproto.temp.requestPhoneVerification';

    /**
     * Add a handle to the set of reserved handles.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-temp-add-reserved-handle
     */
    #[Post, NSID(self::addReservedHandle)]
    public function addReservedHandle(string $handle);

    /**
     * Check accounts location in signup queue.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-temp-check-signup-queue
     */
    #[Get, NSID(self::checkSignupQueue)]
    public function checkSignupQueue();

    /**
     * DEPRECATED: use queryLabels or subscribeLabels instead -- Fetch all labels from a labeler created after a certain date.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-temp-fetch-labels
     */
    #[\Deprecated]
    #[Get, NSID(self::fetchLabels)]
    public function fetchLabels(?int $since = null, ?int $limit = 50);

    /**
     * Request a verification code to be sent to the supplied phone number.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-temp-request-phone-verification
     */
    #[Post, NSID(self::requestPhoneVerification)]
    public function requestPhoneVerification(string $phoneNumber);
}
