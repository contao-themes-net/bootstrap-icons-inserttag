<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ContaoThemesNet\BootstrapIconsInserttag\Tests;

use ContaoThemesNet\BootstrapIconsInserttag\ContaoThemesNetBootstrapIconsInserttag;
use PHPUnit\Framework\TestCase;

class ContaoThemesNetBootstrapIconsInserttagTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoThemesNetBootstrapIconsInserttag();

        $this->assertInstanceOf('ContaoThemesNet\BootstrapIconsInserttag\ContaoThemesNetBootstrapIconsInserttag', $bundle);
    }
}
