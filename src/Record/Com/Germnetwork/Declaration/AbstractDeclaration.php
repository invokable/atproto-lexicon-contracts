<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Com\Germnetwork\Declaration;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A declaration of a Germ Network account.
 */
#[Required(['version', 'currentKey'])]
abstract class AbstractDeclaration
{
    public const NSID = 'com.germnetwork.declaration';

    /**
     * Semver version number, without pre-release or build information, for the format of opaque content.
     */
    protected string $version;

    /**
     * Opaque value, an ed25519 public key prefixed with a byte enum.
     */
    protected $currentKey;

    /**
     * Controls who can message this account.
     */
    #[Ref('com.germnetwork.declaration#messageMe')]
    protected ?array $messageMe = null;

    /**
     * Opaque value, contains MLS KeyPackage(s), and other signature data, and is signed by the currentKey.
     */
    protected $keyPackage = null;

    /**
     * Array of opaque values to allow for key rolling.
     */
    protected ?array $continuityProofs = null;
}
