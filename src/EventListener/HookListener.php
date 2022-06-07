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

class HookListener
{
    private $bootstrapConfig;

    public function __construct($framework, $bootstrapConfig)
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
     * @return string
     */
    private function replaceIconInsertTag($tag)
    {
        $c = $this->bootstrapConfig;
dump($c);
        if($c['useCDN']) {
            $GLOBALS['TL_CSS'][] = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css";
            $GLOBALS['TL_JAVASCRIPT'][] = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js";
        }

        $parts = explode('::', $tag);
        $classes = '';
        if (null !== $parts[2]) {
            $classes = $parts[2].' ';
        }

        $tag = '<i class="'.$parts[1]. ' ' .$classes.'bi"></i>';
dump($tag);
        return $tag;
    }
}
