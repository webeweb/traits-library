<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringUidTrait;

/**
 * String UID trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringUidTraitTest extends AbstractTestCase {

    /**
     * Tests the setUid() method.
     *
     * @return void
     */
    public function testSetUid(): void {

        $obj = new TestStringUidTrait();

        $obj->setUid("uid");
        $this->assertEquals("uid", $obj->getUid());
    }
}
