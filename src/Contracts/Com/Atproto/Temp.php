<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

interface Temp
{
    public const checkSignupQueue = 'com.atproto.temp.checkSignupQueue';
    public const fetchLabels = 'com.atproto.temp.fetchLabels';
    public const requestPhoneVerification = 'com.atproto.temp.requestPhoneVerification';

    /**
     * Check accounts location in signup queue.
     *
     * ```
     * GET com.atproto.temp.checkSignupQueue
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-temp-check-signup-queue
     */
    public function checkSignupQueue();

    /**
     * DEPRECATED: use queryLabels or subscribeLabels instead -- Fetch all labels from a labeler created after a certain date.
     *
     * ```
     * GET com.atproto.temp.fetchLabels
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-temp-fetch-labels
     */
    public function fetchLabels(?int $since = null, ?int $limit = 50);

    /**
     * Request a verification code to be sent to the supplied phone number.
     *
     * ```
     * POST com.atproto.temp.requestPhoneVerification
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-temp-request-phone-verification
     */
    public function requestPhoneVerification(string $phoneNumber);
}
