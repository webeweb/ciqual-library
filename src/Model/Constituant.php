<?php

/*
 * This file is part of the ciqual-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Model;

use WBW\Library\Ciqual\Model\Attribute\StringNomEngTrait;
use WBW\Library\Ciqual\Model\Attribute\StringNomFrTrait;
use WBW\Library\Traits\Strings\StringCodeTrait;

/**
 * Constituant.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Model
 */
class Constituant {

    use StringCodeTrait;
    use StringNomEngTrait;
    use StringNomFrTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    const DOM_NODE_NAME = "CONST";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}