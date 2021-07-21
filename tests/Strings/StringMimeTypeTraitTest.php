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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringMimeTypeTrait;

/**
 * String mime type trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringMimeTypeTraitTest extends AbstractTestCase {

    /**
     * Tests the setMimeType() method.
     *
     * @return void
     */
    public function testSetMimeType(): void {

        $obj = new TestStringMimeTypeTrait();

        $obj->setMimeType("mimeType");
        $this->assertEquals("mimeType", $obj->getMimeType());
    }
}
