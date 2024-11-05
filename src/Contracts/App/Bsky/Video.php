<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

interface Video
{
    public const getJobStatus = 'app.bsky.video.getJobStatus';
    public const getUploadLimits = 'app.bsky.video.getUploadLimits';
    public const uploadVideo = 'app.bsky.video.uploadVideo';

    /**
     * Get status details for a video processing job.
     *
     * ```
     * GET app.bsky.video.getJobStatus
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-video-get-job-status
     */
    public function getJobStatus(string $jobId);

    /**
     * Get video upload limits for the authenticated user.
     *
     * ```
     * GET app.bsky.video.getUploadLimits
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-video-get-upload-limits
     */
    public function getUploadLimits();

    /**
     * Upload a video to be processed then stored on the PDS.
     *
     * ```
     * POST app.bsky.video.uploadVideo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-video-upload-video
     */
    public function uploadVideo();
}
