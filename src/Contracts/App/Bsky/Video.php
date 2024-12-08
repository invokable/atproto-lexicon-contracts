<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Video
{
    public const getJobStatus = 'app.bsky.video.getJobStatus';
    public const getUploadLimits = 'app.bsky.video.getUploadLimits';
    public const uploadVideo = 'app.bsky.video.uploadVideo';

    public const getJobStatusResponse = ['jobStatus' => ['jobId' => 'string', 'did' => 'string', 'state' => 'string', 'progress' => 'int', 'blob' => 'array', 'error' => 'string', 'message' => 'string']];
    public const getUploadLimitsResponse = ['canUpload' => 'bool', 'remainingDailyVideos' => 'int', 'remainingDailyBytes' => 'int', 'message' => 'string', 'error' => 'string'];
    public const uploadVideoResponse = ['jobStatus' => ['jobId' => 'string', 'did' => 'string', 'state' => 'string', 'progress' => 'int', 'blob' => 'array', 'error' => 'string', 'message' => 'string']];

    /**
     * Get status details for a video processing job.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-get-job-status
     */
    #[Get, NSID(self::getJobStatus)]
    #[Output(self::getJobStatusResponse)]
    public function getJobStatus(string $jobId);

    /**
     * Get video upload limits for the authenticated user.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-get-upload-limits
     */
    #[Get, NSID(self::getUploadLimits)]
    #[Output(self::getUploadLimitsResponse)]
    public function getUploadLimits();

    /**
     * Upload a video to be processed then stored on the PDS.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-video-upload-video
     */
    #[Post, NSID(self::uploadVideo)]
    #[Output(self::uploadVideoResponse)]
    public function uploadVideo();
}
