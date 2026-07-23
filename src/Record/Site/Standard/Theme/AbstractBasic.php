<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Record\Site\Standard\Theme;

use Revolution\AtProto\Lexicon\Attributes\Required;
use Revolution\AtProto\Lexicon\Attributes\Union;

/**
 * A simplified theme definition for publications, providing basic color customization for content display across different platforms and applications.
 */
#[Required(['background', 'foreground', 'accent', 'accentForeground'])]
abstract class AbstractBasic
{
    public const NSID = 'site.standard.theme.basic';

    /**
     * Color used for links and button backgrounds.
     */
    #[Union(['site.standard.theme.color#rgb'])]
    protected array $accent;

    /**
     * Color used for button text.
     */
    #[Union(['site.standard.theme.color#rgb'])]
    protected array $accentForeground;

    /**
     * Color used for content background.
     */
    #[Union(['site.standard.theme.color#rgb'])]
    protected array $background;

    /**
     * Color used for content text.
     */
    #[Union(['site.standard.theme.color#rgb'])]
    protected array $foreground;
}
