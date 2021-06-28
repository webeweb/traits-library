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
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatScoreTrait;

/**
 * Float score trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatScoreTraitTest extends AbstractTestCase {

    /**
     * Tests the setScore() method.
     *
     * @return void
     */
    public function testSetScore(): void {

        $obj = new TestFloatScoreTrait();

        $obj->setScore(0.123456789);
        $this->assertEquals(0.123456789, $obj->getScore());
    }
}