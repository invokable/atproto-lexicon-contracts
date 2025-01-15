<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Com\Atproto\Lexicon;

use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Representation of Lexicon schemas themselves, when published as atproto records. Note that the schema language is not defined in Lexicon; this meta schema currently only includes a single version field ('lexicon'). See the atproto specifications for description of the other expected top-level fields ('id', 'defs', etc).
 */
#[Required(['lexicon'])]
abstract class AbstractSchema
{
    public const NSID = 'com.atproto.lexicon.schema';

    /**
     * Indicates the 'version' of the Lexicon language. Must be '1' for the current atproto/Lexicon schema system.
     */
    protected int $lexicon;
}
