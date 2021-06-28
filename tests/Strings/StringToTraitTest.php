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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringToTrait;

/**
 * String to trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringToTraitTest extends AbstractTestCase {

    /**
     * Tests the setTo() method.
     *
     * @return void
     */
    public function testSetTo(): void {

        $obj = new TestStringToTrait();

        $obj->setTo("to");
        $this->assertEquals("to", $obj->getTo());
    }
}
