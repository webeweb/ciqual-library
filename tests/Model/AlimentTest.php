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

use JsonSerializable;
use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Aliment test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class AlimentTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Aliment();
        $obj->setCode("code");
        $obj->setNomFr("nomFr");
        $obj->setNomIndexFr("nomIndexFr");
        $obj->setNomEng("nomEng");
        $obj->setCodeGroupe("codeGroupe");
        $obj->setCodeSousGroupe("codeSousGroupe");
        $obj->setCodeSousSousGroupe("codeSousSousGroupe");

        $res = $obj->jsonSerialize();
        $this->assertCount(7, $res);

        $this->assertEquals("code", $res[SerializerKeys::CODE]);
        $this->assertEquals("nomFr", $res[SerializerKeys::NOM_FR]);
        $this->assertEquals("nomIndexFr", $res[SerializerKeys::NOM_INDEX_FR]);
        $this->assertEquals("nomEng", $res[SerializerKeys::NOM_ENG]);
        $this->assertEquals("codeGroupe", $res[SerializerKeys::CODE_GROUPE]);
        $this->assertEquals("codeSousGroupe", $res[SerializerKeys::CODE_SOUS_GROUPE]);
        $this->assertEquals("codeSousSousGroupe", $res[SerializerKeys::CODE_SOUS_SOUS_GROUPE]);
    }

    /**
     * Tests setCodeGroupe()
     *
     * @return void
     */
    public function testSetCodeGroupe(): void {

        $obj = new Aliment();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests setNomIndexFr()
     *
     * @returnn void
     */
    public function testSetNomIndexFr(): void {

        $obj = new Aliment();

        $obj->setNomIndexFr("nomIndexFr");
        $this->assertEquals("nomIndexFr", $obj->getNomIndexFr());
    }

    /**
     * Tests __construct()
     *
     * @returnn void
     */
    public function test__construct(): void {

        $this->assertEquals("ALIM", Aliment::DOM_NODE_NAME);

        $obj = new Aliment();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getCodeSousGroupe());
        $this->assertNull($obj->getCodeSousSousGroupe());
        $this->assertNull($obj->getNomEng());
        $this->assertNull($obj->getNomFr());
        $this->assertNull($obj->getNomIndexFr());
    }
}
