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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringFilenameTrait;

/**
 * String filename trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringFilenameTraitTest extends AbstractTestCase {

    /**
     * Tests the setFilename() method.
     *
     * @return void
     */
    public function testSetFilename(): void {

        $obj = new TestStringFilenameTrait();

        $obj->setFilename("filename");
        $this->assertEquals("filename", $obj->getFilename());
    }
}
