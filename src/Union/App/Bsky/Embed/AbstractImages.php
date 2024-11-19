<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Embed;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;


#[Required(['images'])]
abstract class AbstractImages
{
    protected string $type = 'app.bsky.embed.images';

    #[Ref('app.bsky.embed.images#image')]
    protected array $images;
}
