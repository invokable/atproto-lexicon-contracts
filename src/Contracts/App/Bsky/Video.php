<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Video
{
    public const abortUpload = 'app.bsky.video.abortUpload';
    public const finishUpload = 'app.bsky.video.finishUpload';
    public const getJobStatus = 'app.bsky.video.getJobStatus';
    public const getUploadLimits = 'app.bsky.video.getUploadLimits';
    public const getUploadStatus = 'app.bsky.video.getUploadStatus';
    public const startUpload = 'app.bsky.video.startUpload';
    public const uploadPart = 'app.bsky.video.uploadPart';
    public const uploadVideo = 'app.bsky.video.uploadVideo';

    /**
     * Abort an upload only while it is created, releasing its quota reservation immediately. Terminal sessions are unchanged and return their terminal outcome. A finishing session returns UploadNotReady.
     *
     * @return array{state: string, completedJobId: string, failureReason: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-abort-upload
     */
    #[Post, NSID(self::abortUpload)]
    public function abortUpload(string $jobId);

    /**
     * Finish an upload. This call is idempotent and safe to retry. On deduplication completedJobId may differ from the input jobId; poll getJobStatus with completedJobId. Probe-based validation failures surface later as JOB_STATE_FAILED from getJobStatus, not as errors from this call.
     *
     * @return array{completedJobId: string, jobStatus: array{jobId: string, did: string, state: string, progress: int, blob: array, error: string, failureCode: string, message: string}}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-finish-upload
     */
    #[Post, NSID(self::finishUpload)]
    public function finishUpload(string $jobId);

    /**
     * Get status details for a video processing job.
     *
     * @return array{jobStatus: array{jobId: string, did: string, state: string, progress: int, blob: array, error: string, failureCode: string, message: string}}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-get-job-status
     */
    #[Get, NSID(self::getJobStatus)]
    public function getJobStatus(string $jobId);

    /**
     * Get video upload limits for the authenticated user.
     *
     * @return array{canUpload: bool, remainingDailyVideos: int, remainingDailyBytes: int, message: string, error: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-get-upload-limits
     */
    #[Get, NSID(self::getUploadLimits)]
    public function getUploadLimits();

    /**
     * Get the authoritative status of the upload phase. Terminal states remain readable. completedJobId and jobStatus are present only for completed sessions; failureReason is present only for failed sessions.
     *
     * @return array{jobId: string, partSizeBytes: int, partCount: int, receivedParts: array, expiresAt: string, state: string, completedJobId: string, jobStatus: array{jobId: string, did: string, state: string, progress: int, blob: array, error: string, failureCode: string, message: string}, failureReason: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-get-upload-status
     */
    #[Get, NSID(self::getUploadStatus)]
    public function getUploadStatus(string $jobId);

    /**
     * Start a multipart video upload. The declared size is exact, while optional media properties are advisory and used only for early failure; the authoritative probe runs asynchronously after upload.
     *
     * @return array{jobId: string, partSizeBytes: int, partCount: int, expiresAt: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-start-upload
     */
    #[Post, NSID(self::startUpload)]
    public function startUpload(int $sizeBytes, string $mimeType, ?string $name = null, ?int $durationMs = null, ?int $width = null, ?int $height = null);

    /**
     * Upload one part. Parts are idempotent and may be retried or re-sent while the session is created. Each expected length is derived from the upload size and part size, and Content-Length must match exactly. ETags are never exposed to clients.
     *
     * @return array{partNumber: int, sizeBytes: int}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-upload-part
     */
    #[Post, NSID(self::uploadPart)]
    public function uploadPart(string $jobId, int $partNumber);

    /**
     * Upload a video to be processed then stored on the PDS.
     *
     * @return array{jobStatus: array{jobId: string, did: string, state: string, progress: int, blob: array, error: string, failureCode: string, message: string}}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-upload-video
     */
    #[Post, NSID(self::uploadVideo)]
    public function uploadVideo();
}
