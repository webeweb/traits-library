<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Composite;

use WBW\Library\Traits\DateTimes\DateTimeCreatedAtTrait;
use WBW\Library\Traits\DateTimes\DateTimeUpdatedAtTrait;

/**
 * Composite timestampable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Composite
 */
trait CompositeTimestampableTrait {

    use DateTimeCreatedAtTrait;
    use DateTimeUpdatedAtTrait;
}