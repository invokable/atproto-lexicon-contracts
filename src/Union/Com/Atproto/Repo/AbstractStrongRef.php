<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\Com\Atproto\Repo;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A URI with a content-hash fingerprint.
 */
#[Required(['uri', 'cid'])]
abstract class AbstractStrongRef
{
    protected string $type = 'com.atproto.repo.strongRef';

    #[Format('at-uri')]
    protected string $uri;

    #[Format('cid')]
    protected string $cid;
}
