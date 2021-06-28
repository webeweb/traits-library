<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Booleans;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanVerboseTrait;

/**
 * Boolean verbose trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanVerboseTraitTest extends AbstractTestCase {

    /**
     * Tests the setVerbose() method.
     *
     * @return void
     */
    public function testSetVerbose(): void {

        $obj = new TestBooleanVerboseTrait();

        $obj->setVerbose(true);
        $this->assertTrue($obj->getVerbose());
    }
}
