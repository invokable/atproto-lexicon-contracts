<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Com\Germnetwork\Declaration;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A delegate messaging id.
 */
#[Required(['version', 'currentKey'])]
abstract class AbstractDeclaration
{
    public const NSID = 'com.germnetwork.declaration';

    protected string $version;

    protected $currentKey;

    #[Ref('com.germnetwork.declaration#messageMe')]
    protected ?array $messageMe = null;

    protected $keyPackage = null;

    protected ?array $continuityProofs = null;
}
