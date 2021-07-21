<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringNumberTrait;

/**
 * String number trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringNumberTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumber() method.
     *
     * @return void
     */
    public function testSetNumber(): void {

        $obj = new TestStringNumberTrait();

        $obj->setNumber("number");
        $this->assertEquals("number", $obj->getNumber());
    }
}
