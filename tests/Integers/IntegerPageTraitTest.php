<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerPageTrait;

/**
 * Integer page trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerPageTraitTest extends AbstractTestCase {

    /**
     * Tests the setPage() method.
     *
     * @return void
     */
    public function testSetPage(): void {

        $obj = new TestIntegerPageTrait();

        $obj->setPage(1);
        $this->assertEquals(1, $obj->getPage());
    }
}
