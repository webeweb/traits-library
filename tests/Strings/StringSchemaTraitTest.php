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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringSchemaTrait;

/**
 * String schema trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringSchemaTraitTest extends AbstractTestCase {

    /**
     * Tests the setSchema() method.
     *
     * @return void
     */
    public function testSetSchema(): void {

        $obj = new TestStringSchemaTrait();

        $obj->setSchema("schema");
        $this->assertEquals("schema", $obj->getSchema());
    }
}
