<?php

/*
 * This file is part of the traits-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String uid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Traits\Strings
 */
trait StringUidTrait {

    /**
     * Uid.
     *
     * @var string|null
     */
    protected $uid;

    /**
     * Get the uid.
     *
     * @return string|null Returns the uid.
     */
    public function getUid(): ?string {
        return $this->uid;
    }

    /**
     * Set the uid.
     *
     * @param string|null $uid The uid.
     * @return self Returns this instance.
     */
    public function setUid(?string $uid): self {
        $this->uid = $uid;
        return $this;
    }
}
