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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringCustomerCodeTrait;

/**
 * String customer code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringCustomerCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setCustomerCode() method.
     *
     * @return void
     */
    public function testSetCustomerCode(): void {

        $obj = new TestStringCustomerCodeTrait();

        $obj->setCustomerCode("customerCode");
        $this->assertEquals("customerCode", $obj->getCustomerCode());
    }
}