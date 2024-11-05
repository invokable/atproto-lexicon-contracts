<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

interface Server
{
    public const getConfig = 'tools.ozone.server.getConfig';

    /**
     * Get details about ozone's server configuration.
     *
     * ```
     * GET tools.ozone.server.getConfig
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-server-get-config
     */
    public function getConfig();
}
