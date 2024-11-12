<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Enum;

enum ListPurpose: string
{
    /**
     * A list of actors to apply an aggregate moderation action (mute/block) on.
     */
    case Modlist = 'app.bsky.graph.defs#modlist';

    /**
     * A list of actors used for curation purposes such as list feeds or interaction gating.
     */
    case Curatelist = 'app.bsky.graph.defs#curatelist';

    /**
     * A list of actors used for only for reference purposes such as within a starter pack.
     */
    case Referencelist = 'app.bsky.graph.defs#referencelist';
}
