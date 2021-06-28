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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringTooltipTrait;

/**
 * String tooltip trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringTooltipTraitTest extends AbstractTestCase {

    /**
     * Tests the setTooltip() method.
     *
     * @return void
     */
    public function testSetTooltip(): void {

        $obj = new TestStringTooltipTrait();

        $obj->setTooltip("tooltip");
        $this->assertEquals("tooltip", $obj->getTooltip());
    }
}
