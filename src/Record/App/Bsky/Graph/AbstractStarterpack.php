<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Record defining a starter pack of actors and feeds for new users.
 */
#[Required(['name', 'list', 'createdAt'])]
abstract class AbstractStarterpack
{
    public const NSID = 'app.bsky.graph.starterpack';

    /**
     * Display name for starter pack; can not be empty.
     */
    protected string $name;

    protected ?string $description = null;

    protected ?array $descriptionFacets = null;

    /**
     * Reference (AT-URI) to the list record.
     */
    #[Format('at-uri')]
    protected string $list;

    protected ?array $feeds = null;

    #[Format('datetime')]
    protected string $createdAt;
}
