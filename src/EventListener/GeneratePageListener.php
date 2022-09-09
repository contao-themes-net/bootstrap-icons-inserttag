<?php

declare(strict_types=1);

/*
 * Klaro Consent Manager bundle for Contao Open Source CMS
 *
 * Copyright (c) 2022 pdir / digital agentur // pdir GmbH
 *
 * @package    klaro-consent-manager
 * @link       https://pdir.de/consent/
 * @license    LGPL-3.0-or-later
 * @author     Mathias Arzberger <develop@pdir.de>
 * @author     Christian Mette <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\BootstrapIconsInserttag\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;


/**
 * The generatePage hook is triggered before the main layout (fe_page) is compiled.
 * It passes the page object, the layout object and a self-reference as arguments
 * and does not expect a return value.
 *
 * @Hook("generatePage")
 */
class GeneratePageListener
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
     * @param PageModel   $pageModel   the current page object
     * @param LayoutModel $layout      the active page layout applied for rendering the page
     * @param PageRegular $pageRegular the current page type object
     */
    public function onGeneratePage(PageModel $pageModel, LayoutModel $layout, PageRegular $pageRegular): void
    {
        global $objPage;

        extract($this->bootstrapConfig);

        if($source['use_cdn'] === true) {
            // use cdn
            $GLOBALS['TL_CSS'][] = $source['css_source'];
            $GLOBALS['TL_JAVASCRIPT'][] = $source['js_source'];
        } else {
            // use local
            $GLOBALS['TL_CSS'][] = "bundles/contaothemesnetbootstrapiconsinserttag/css/bootstrap-icons.css";
            $GLOBALS['TL_JAVASCRIPT'][] = "bundles/contaothemesnetbootstrapiconsinserttag/js/bootstrap.bundle.min.js";
        }
    }
}
