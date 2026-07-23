<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Site\Standard\Graph;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Record declaring a recommendation of a document.
 */
#[Required(['document', 'createdAt'])]
abstract class AbstractRecommend
{
    public const NSID = 'site.standard.graph.recommend';

    #[Format('datetime')]
    protected string $createdAt;

    /**
     * AT-URI reference to the document record being recommended (ex: at://did:plc:abc123/site.standard.document/xyz789).
     */
    #[Format('at-uri')]
    protected string $document;
}
