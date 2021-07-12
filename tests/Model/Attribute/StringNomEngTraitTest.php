<?php

/*
 * This file is part of the ciqual-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Tests\Model\Attribute;

use WBW\Library\Ciqual\Tests\AbstractTestCase;
use WBW\Library\Ciqual\Tests\Fixtures\Model\Attribute\TestStringNomEngTrait;

/**
 * String nom ENG trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model\Attribute
 */
class StringNomEngTraitTest extends AbstractTestCase {

    /**
     * Tests the setNomEng() method.
     *
     * @return void
     */
    public function testSetNomEng(): void {

        $obj = new TestStringNomEngTrait();

        $obj->setNomEng("nomEng");
        $this->assertEquals("nomEng", $obj->getNomEng());
    }
}
