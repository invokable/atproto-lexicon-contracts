<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;

/**
 * A representation of some externally linked content (eg, a URL and 'card'), embedded in a Bluesky record (eg, a post).
 */
#[Required(['external'])]
abstract class AbstractExternal
{
    protected string $type = 'app.bsky.embed.external';

    #[Ref('app.bsky.embed.external#external')]
    protected array $external;
}
