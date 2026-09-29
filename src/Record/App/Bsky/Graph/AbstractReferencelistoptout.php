<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record requesting that its author be omitted from the public presentation of a reference list. This record is only enforced when the subject list's current purpose is app.bsky.graph.defs#referencelist. AppView indexes at most one record per actor and list pair, and ignores duplicate records.
 */
#[Required(['subject', 'createdAt'])]
abstract class AbstractReferencelistoptout
{
    public const NSID = 'app.bsky.graph.referencelistoptout';

    /**
     * Canonical, DID-based AT URI of the app.bsky.graph.list record from which the author requests omission.
     */
    #[Format('at-uri')]
    protected string $subject;

    #[Format('datetime')]
    protected string $createdAt;
}
