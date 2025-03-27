<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Union\App\Bsky\Richtext;

use Revolution\AtProto\Lexicon\Attributes\Ref;
use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * Annotation of a sub-string within rich text.
 */
#[Required(['index', 'features'])]
abstract class AbstractFacet
{
    public const NSID = 'app.bsky.richtext.facet';

    #[Ref('app.bsky.richtext.facet#byteSlice')]
    protected array $index;

    #[Union(['app.bsky.richtext.facet#mention', 'app.bsky.richtext.facet#link', 'app.bsky.richtext.facet#tag'])]
    protected array $features;
}
