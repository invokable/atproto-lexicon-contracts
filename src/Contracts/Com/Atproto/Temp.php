<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Temp
{
    public const addReservedHandle = 'com.atproto.temp.addReservedHandle';
    public const checkHandleAvailability = 'com.atproto.temp.checkHandleAvailability';
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
     * Checks whether the provided handle is available. If the handle is not available, available suggestions will be returned. Optional inputs will be used to generate suggestions.
     *
     * @return array{handle: string, result: array}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-temp-check-handle-availability
     */
    #[Get, NSID(self::checkHandleAvailability)]
    public function checkHandleAvailability(#[Format('handle')] string $handle, ?string $email = null, #[Format('datetime')] ?string $birthDate = null);

    /**
     * Check accounts location in signup queue.
     *
     * @return array{activated: bool, placeInQueue: int, estimatedTimeMs: int}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-temp-check-signup-queue
     */
    #[Get, NSID(self::checkSignupQueue)]
    public function checkSignupQueue();

    /**
     * DEPRECATED: use queryLabels or subscribeLabels instead -- Fetch all labels from a labeler created after a certain date.
     *
     * @return array{labels: array{ver: int, src: string, uri: string, cid: string, val: string, neg: bool, cts: string, exp: string, sig: mixed}[]}
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
