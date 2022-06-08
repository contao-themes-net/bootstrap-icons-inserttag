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

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['ctn.bootstrapiconsinserttag.listener.replaceinserttags', 'onReplaceInsertTags'];
$GLOBALS['TL_HOOKS']['generatePage'][] = ['ctn.bootstrapiconsinserttag.listener.generatepage', 'onGeneratePage'];
