<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Composite;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Composite\TestCompositeTimestampableTrait;

/**
 * Composite timestampable trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Composite
 */
class CompositeTimestampableTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestCompositeTimestampableTrait();

        $this->assertNull($obj->getCreatedAt());
        $this->assertNull($obj->getUpdatedAt());
    }
}