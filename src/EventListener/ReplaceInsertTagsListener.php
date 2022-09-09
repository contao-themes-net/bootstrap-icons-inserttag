<?php

/*
 * Bootstrap Icons Inserttag Bundle for Contao Open Source CMS
 *
 * Copyright (c) 2019 pdir / digital agentur // pdir GmbH
 * @package    bootstrap-icons-inserttag
 * @link       https://github.com/contao-themes-net/bootstrap-icons-inserttag
 * @author     Philipp Seibt <develop@pdir.de>
 * @license    LGPL-3.0-or-later
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\BootstrapIconsInserttag\EventListener;

use Contao\System;

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
        if (preg_match('/^bi([bsrl]?)\:\:/', $tag)) {
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

        [, $name, $classes] = $parts;

        $classes = $classes ? " $classes" : '';

        if($use['icon_font'] === true) {
            $tag = "<i class='bi-$name{$classes}'></i>";
        }
        elseif($use['svg'] === true) {
            $tag = "<img src='bundles/contaothemesnetbootstrapiconsinserttag/img/bootstrap/{$name}.svg' class='{$classes}' alt='Bootstrap'>";
        }
        else {
            $tag = "<i>check your parameters.yml</i>";
        }

        return $tag;
    }
}
