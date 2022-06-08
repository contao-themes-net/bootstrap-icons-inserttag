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
     * Replace the insert tag.
     *
     * @param string $tag the insert tag
     *
     * @return bool|string
     */
    public function onReplaceInsertTags($tag)
    {
dump($tag);
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
        // other user defined css style arguments
        $classes = '';

        $parts = explode('::', $tag);
dump($parts);
        [, $name, $classes] = $parts;
dump("name: $name classes: $classes");

        $classes = $classes ? " $classes" : '';

        $tag = "<div>[tag:$tag class='bi-{$name}{$classes}' result:<i class='bi-$name{$classes}'></i>]</div>";
        #$tag = "<i class='bi-$name{$class}'{$style}></i>";
dump($tag);
        return $tag;
    }
}
