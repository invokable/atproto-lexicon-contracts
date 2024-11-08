<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Video
{
    public const getJobStatus = 'app.bsky.video.getJobStatus';
    public const getUploadLimits = 'app.bsky.video.getUploadLimits';
    public const uploadVideo = 'app.bsky.video.uploadVideo';

    /**
     * Get status details for a video processing job.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-video-get-job-status
     */
    #[Get, NSID(self::getJobStatus)]
    public function getJobStatus(string $jobId);

    /**
     * Get video upload limits for the authenticated user.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-video-get-upload-limits
     */
    #[Get, NSID(self::getUploadLimits)]
    public function getUploadLimits();

    /**
     * Upload a video to be processed then stored on the PDS.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-video-upload-video
     */
    #[Post, NSID(self::uploadVideo)]
    public function uploadVideo();
}
