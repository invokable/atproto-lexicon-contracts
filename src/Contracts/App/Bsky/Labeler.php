<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

interface Labeler
{
    public const getServices = 'app.bsky.labeler.getServices';

    /**
     * Get information about a list of labeler services.
     *
     * ```
     * GET app.bsky.labeler.getServices
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-labeler-get-services
     */
    public function getServices(array $dids, ?bool $detailed = null);
}
