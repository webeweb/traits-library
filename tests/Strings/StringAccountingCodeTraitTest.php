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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringAccountingCodeTrait;

/**
 * String accounting code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringAccountingCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAccountingCode() method.
     *
     * @return void
     */
    public function testSetAccountingCode(): void {

        $obj = new TestStringAccountingCodeTrait();

        $obj->setAccountingCode("accountingCode");
        $this->assertEquals("accountingCode", $obj->getAccountingCode());
    }
}
