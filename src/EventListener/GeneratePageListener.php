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
    private $bootstrapConfig;

    public function __construct($bootstrapConfig)
    {
        $this->bootstrapConfig = $bootstrapConfig;
    }

    /**
     * @param PageModel   $pageModel   the current page object
     * @param LayoutModel $layout      the active page layout applied for rendering the page
     * @param PageRegular $pageRegular the current page type object
     */
    #public function __invoke(PageModel $pageModel, LayoutModel $layout, PageRegular $pageRegular): void
    public function onGeneratePage(PageModel $pageModel, LayoutModel $layout, PageRegular $pageRegular): void
    {
        global $objPage;

        $c = $this->bootstrapConfig;

        if($c['useCDN']) {
            $GLOBALS['TL_HEAD'][] = "
<style>
.red { color: red; }
.blue { color: blue; }
.fs-3 { font-size: 3rem; }
.fs-6 { font-size: 6rem; }
.bg-red: { background-color: #ff0000; }
}
</style>";

            $GLOBALS['TL_CSS'][] = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css";
            $GLOBALS['TL_JAVASCRIPT'][] = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js";
        }
    }
}
