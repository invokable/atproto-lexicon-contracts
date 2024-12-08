<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;

interface Labeler
{
    public const getServices = 'app.bsky.labeler.getServices';

    public const getServicesResponse = ['views' => 'array'];

    /**
     * Get information about a list of labeler services.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-labeler-get-services
     */
    #[Get, NSID(self::getServices)]
    #[Output(self::getServicesResponse)]
    public function getServices(#[Format('did')] array $dids, ?bool $detailed = null);
}
