<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;

interface Server
{
    public const getConfig = 'tools.ozone.server.getConfig';

    public const getConfigResponse = ['appview' => ['url' => 'string'], 'pds' => ['url' => 'string'], 'blobDivert' => ['url' => 'string'], 'chat' => ['url' => 'string'], 'viewer' => ['role' => 'string'], 'verifierDid' => 'string'];

    /**
     * Get details about ozone's server configuration.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-server-get-config
     */
    #[Get, NSID(self::getConfig)]
    #[Output(self::getConfigResponse)]
    public function getConfig();
}
