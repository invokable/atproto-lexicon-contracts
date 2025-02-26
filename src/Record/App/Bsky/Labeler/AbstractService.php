<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\App\Bsky\Labeler;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A declaration of the existence of labeler service.
 */
#[Required(['policies', 'createdAt'])]
abstract class AbstractService
{
    public const NSID = 'app.bsky.labeler.service';

    #[Ref('app.bsky.labeler.defs#labelerPolicies')]
    protected array $policies;

    #[Union(['com.atproto.label.defs#selfLabels'])]
    protected ?array $labels = null;

    #[Format('datetime')]
    protected string $createdAt;

    /**
     * The set of report reason 'codes' which are in-scope for this service to review and action. These usually align to policy categories. If not defined (distinct from empty array), all reason types are allowed.
     */
    #[Ref('com.atproto.moderation.defs#reasonType')]
    protected ?array $reasonTypes = null;

    /**
     * The set of subject types (account, record, etc) this service accepts reports on.
     */
    #[Ref('com.atproto.moderation.defs#subjectType')]
    protected ?array $subjectTypes = null;

    /**
     * Set of record types (collection NSIDs) which can be reported to this service. If not defined (distinct from empty array), default is any record type.
     */
    #[Format('nsid')]
    protected ?array $subjectCollections = null;
}
