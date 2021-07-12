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

use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Aliment test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class AlimentTest extends AbstractTestCase {

    /**
     * Tests the setCodeGroupe() method.
     *
     * @return void
     */
    public function testSetCodeGroupe(): void {

        $obj = new Aliment();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests the setNomIndexFr() method.
     *
     * @returnn void
     */
    public function testSetNomIndexFr(): void {

        $obj = new Aliment();

        $obj->setNomIndexFr("nomIndexFr");
        $this->assertEquals("nomIndexFr", $obj->getNomIndexFr());
    }

    /**
     * Tests the __construct() method.
     *
     * @returnn void
     */
    public function test__construct(): void {

        $this->assertEquals("ALIM", Aliment::DOM_NODE_NAME);

        $obj = new Aliment();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getCodeSousGroupe());
        $this->assertNull($obj->getCodeSousSousGroupe());
        $this->assertNull($obj->getNomEng());
        $this->assertNull($obj->getNomFr());
        $this->assertNull($obj->getNomIndexFr());
    }
}
