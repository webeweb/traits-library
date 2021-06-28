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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringHouseNumberTrait;

/**
 * String house number trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringHouseNumberTraitTest extends AbstractTestCase {

    /**
     * Tests the setHouseNumber() method.
     *
     * @return void
     */
    public function testSetHouseNumber(): void {

        $obj = new TestStringHouseNumberTrait();

        $obj->setHouseNumber("houseNumber");
        $this->assertEquals("houseNumber", $obj->getHouseNumber());
    }
}
