<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Composite;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Composite\TestCompositeAddressTrait;

/**
 * Composite address trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Tests\Composite
 */
class CompositeAddressTraitTest extends AbstractTestCase {

    /**
     * Tests the setAddresseeDescription() method.
     *
     * @return void
     */
    public function testSetAddresseeDescription(): void {

        $obj = new TestCompositeAddressTrait();

        $obj->setAddresseeDescription("addresseeDescription");
        $this->assertEquals("addresseeDescription", $obj->getAddresseeDescription());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestCompositeAddressTrait();

        $this->assertNull($obj->getAddressee());
        $this->assertNull($obj->getCountry());
        $this->assertNull($obj->getHouseNumber());
        $this->assertNull($obj->getLocation());
        $this->assertNull($obj->getPostalCode());
        $this->assertNull($obj->getStreetName());
    }
}