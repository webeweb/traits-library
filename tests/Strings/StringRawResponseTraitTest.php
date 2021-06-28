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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringRawResponseTrait;

/**
 * String raw response trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringRawResponseTraitTest extends AbstractTestCase {

    /**
     * Tests the setRawResponse() method.
     *
     * @return void
     */
    public function testSetRawResponse(): void {

        $obj = new TestStringRawResponseTrait();

        $obj->setRawResponse("rawResponse");
        $this->assertEquals("rawResponse", $obj->getRawResponse());
    }
}
