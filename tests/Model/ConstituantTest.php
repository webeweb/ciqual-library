<?php

/*
 * This file is part of the ciqual-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Tests\Model;

use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Constituant test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class ConstituantTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("CONST", Constituant::DOM_NODE_NAME);

        $obj = new Constituant();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getNomEng());
        $this->assertNull($obj->getNomFr());
    }
}
