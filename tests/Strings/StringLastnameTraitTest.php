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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringLastNameTrait;

/**
 * String last name trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringLastnameTraitTest extends AbstractTestCase {

    /**
     * Tests the setLastName() method.
     *
     * @return void
     */
    public function testSetLastName(): void {

        $obj = new TestStringLastNameTrait();

        $obj->setLastName("lastname");
        $this->assertEquals("lastname", $obj->getLastName());
    }
}
