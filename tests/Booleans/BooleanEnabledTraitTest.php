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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanEnabledTrait;

/**
 * Boolean enabled trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanEnabledTraitTest extends AbstractTestCase {

    /**
     * Tests the setEnabled() method.
     *
     * @return void
     */
    public function testSetEnabled(): void {

        $obj = new TestBooleanEnabledTrait();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }
}
