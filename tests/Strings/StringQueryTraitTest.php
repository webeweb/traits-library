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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringQueryTrait;

/**
 * String query trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringQueryTraitTest extends AbstractTestCase {

    /**
     * Tests the setQuery() method.
     *
     * @return void
     */
    public function testSetQuery(): void {

        $obj = new TestStringQueryTrait();

        $obj->setQuery("query");
        $this->assertEquals("query", $obj->getQuery());
    }
}
