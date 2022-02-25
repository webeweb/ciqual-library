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
use WBW\Library\Ciqual\Tests\Fixtures\Model\Attribute\TestStringNomFrTrait;

/**
 * String nom FR trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Model\Attribute
 */
class StringNomFrTraitTest extends AbstractTestCase {

    /**
     * Tests setNomFr()
     *
     * @return void
     */
    public function testSetNomFr(): void {

        $obj = new TestStringNomFrTrait();

        $obj->setNomFr("nomFr");
        $this->assertEquals("nomFr", $obj->getNomFr());
    }
}
