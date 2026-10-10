<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Social\Grain\Favorite;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Required;


#[Required(['createdAt', 'subject'])]
abstract class AbstractFavorite
{
    public const NSID = 'social.grain.favorite';

    #[Format('at-uri')]
    protected string $subject;

    #[Format('datetime')]
    protected string $createdAt;
}
