<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatExcludingVatTotalTrait;

/**
 * Float excluding VAT total trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatExcludingVatTotalTraitTest extends AbstractTestCase {

    /**
     * Tests the setExcludingVatTotal() method.
     *
     * @return void
     */
    public function testSetExcludingVatTotal(): void {

        $obj = new TestFloatExcludingVatTotalTrait();

        $obj->setExcludingVatTotal(0.123456789);
        $this->assertEquals(0.123456789, $obj->getExcludingVatTotal());
    }
}
