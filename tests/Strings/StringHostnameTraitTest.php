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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringHostnameTrait;

/**
 * String hostname trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringHostnameTraitTest extends AbstractTestCase {

    /**
     * Tests the setHostname() method.
     *
     * @return void
     */
    public function testSetHostname(): void {

        $obj = new TestStringHostnameTrait();

        $obj->setHostname("hostname");
        $this->assertEquals("hostname", $obj->getHostname());
    }
}
