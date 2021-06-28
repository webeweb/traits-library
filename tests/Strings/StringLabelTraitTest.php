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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringLabelTrait;

/**
 * String label trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringLabelTraitTest extends AbstractTestCase {

    /**
     * Tests the setLabel() method.
     *
     * @return void
     */
    public function testSetLabel(): void {

        $obj = new TestStringLabelTrait();

        $obj->setLabel("label");
        $this->assertEquals("label", $obj->getLabel());
    }
}
