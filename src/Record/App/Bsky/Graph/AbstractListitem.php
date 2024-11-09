<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record representing an account's inclusion on a specific list. The AppView will ignore duplicate listitem records.
 */
abstract class AbstractListitem
{
    public const NSID = 'app.bsky.graph.listitem';

    /**
     * The account which is included on the list.
     */
    protected string $subject;

    /**
     * Reference (AT-URI) to the list record (app.bsky.graph.list).
     */
    protected string $list;

    protected string $createdAt;
}
