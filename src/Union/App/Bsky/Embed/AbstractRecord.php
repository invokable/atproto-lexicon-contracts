<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;


#[Required(['record'])]
abstract class AbstractRecord
{
    protected string $type = 'app.bsky.embed.record';

    #[Ref('com.atproto.repo.strongRef')]
    protected array $record;
}
