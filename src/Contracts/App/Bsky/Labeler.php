<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Labeler
{
    public const getServices = 'app.bsky.labeler.getServices';

    /**
     * Get information about a list of labeler services.
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-labeler-get-services
     */
    #[Get, NSID(self::getServices)]
    public function getServices(#[Format('did')] array $dids, ?bool $detailed = null);
}
