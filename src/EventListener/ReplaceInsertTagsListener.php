<?php

declare(strict_types=1);

namespace ContaoThemesNet\BootstrapIconsInserttag\EventListener;

class ReplaceInsertTagsListener
{
    /**
     * @var
     */
    private $bootstrapConfig;

    /**
     * @param $bootstrapConfig
     */
    public function __construct($bootstrapConfig)
    {
        $this->bootstrapConfig = $bootstrapConfig;
    }

    /**
     * Replace the insert tag.
     *
     * @param string $tag the insert tag
     *
     * @return bool|string
     */
    public function onReplaceInsertTags($tag)
    {
        if (preg_match('/^bi([bsrl]?)::/', $tag)) {
            return $this->replaceIconInsertTag($tag);
        }

        return false;
    }

    /**
     * Replace the icon insert tag.
     *
     * @param string $tag the given tag
     *
     * @return string the html code
     */
    private function replaceIconInsertTag($tag)
    {
        extract($this->bootstrapConfig);

        $parts = explode('::', $tag);

        [, $name, $classes, $styles] = $parts;

        $classes = $classes ? " $classes" : '';
        $style = empty($styles) ? '' : " style='$styles'";

        if($use['icon_font'] === true) {
            $tag = "<i class='bi bi-$name{$classes}'$style></i>";
        }
        elseif($use['svg'] === true) {
            $tag = "<img src='bundles/contaothemesnetbootstrapiconsinserttag/img/bootstrap/{$name}.svg' class='{$classes}'$style alt='$name'>";
        }
        else {
            $tag = "<i>check your parameters.yml</i>";
        }

        return $tag;
    }
}
