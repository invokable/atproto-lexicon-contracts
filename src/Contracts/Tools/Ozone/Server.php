<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;

interface Server
{
    public const getConfig = 'tools.ozone.server.getConfig';

    /**
     * Get details about ozone's server configuration.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-server-get-config
     */
    #[Get, NSID(self::getConfig)]
    public function getConfig();
}
