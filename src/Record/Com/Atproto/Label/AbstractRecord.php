<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Com\Atproto\Label;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * Metadata tag on an atproto resource (eg, repo or record), published as a record in the labeler's repository. Currently ONLY intended to be used in atproto space repos, not the public broadcast repository. For public data, continue to use signed label objects. This guidance may be updated in the future.
 */
#[Required(['uri', 'val', 'cts'])]
abstract class AbstractRecord
{
    public const NSID = 'com.atproto.label.record';

    /**
     * URI of the record, repository (account), or other resource that this label applies to. Currently only intended for use in the context of atproto spaces.
     */
    #[Format('uri')]
    protected string $uri;

    /**
     * Optionally, CID specifying the specific version of 'uri' resource this label applies to.
     */
    #[Format('cid')]
    protected ?string $cid = null;

    /**
     * The short string name of the value or type of this label.
     */
    protected string $val;

    /**
     * Timestamp when this label was created.
     */
    #[Format('datetime')]
    protected string $cts;

    /**
     * Timestamp at which this label expires (no longer applies).
     */
    #[Format('datetime')]
    protected ?string $exp = null;
}
