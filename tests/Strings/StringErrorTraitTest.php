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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringErrorTrait;

/**
 * String error trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringErrorTraitTest extends AbstractTestCase {

    /**
     * Tests the setError() method.
     *
     * @return void
     */
    public function testSetError(): void {

        $obj = new TestStringErrorTrait();

        $obj->setError("error");
        $this->assertEquals("error", $obj->getError());
    }
}