<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringColorTrait;

/**
 * String color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringColorTraitTest extends AbstractTestCase {

    /**
     * Tests the setColor() method.
     *
     * @return void
     */
    public function testSetColor(): void {

        $obj = new TestStringColorTrait();

        $obj->setColor("color");
        $this->assertEquals("color", $obj->getColor());
    }
}