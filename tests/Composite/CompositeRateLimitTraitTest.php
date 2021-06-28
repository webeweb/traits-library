<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Composite;

use DateTime;
use Exception;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Composite\TestCompositeRateLimitTrait;

/**
 * Composite rate limit trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Composite
 */
class CompositeRateLimitTraitTest extends AbstractTestCase {

    /**
     * Tests the setLimit() method.
     *
     * @return void
     */
    public function testSetLimit(): void {

        $obj = new TestCompositeRateLimitTrait();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Tests the setRemaining() method.
     *
     * @return void
     */
    public function testSetRemaining(): void {

        $obj = new TestCompositeRateLimitTrait();

        $obj->setRemaining(1);
        $this->assertEquals(1, $obj->getRemaining());
    }

    /**
     * Tests the setReset() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReset(): void {

        // Set a Date/time mock.
        $reset = new DateTime();

        $obj = new TestCompositeRateLimitTrait();

        $obj->setReset($reset);
        $this->assertSame($reset, $obj->getReset());
    }
}