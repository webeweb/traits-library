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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringMessageTrait;

/**
 * String message trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringMessageTraitTest extends AbstractTestCase {

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new TestStringMessageTrait();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }
}
