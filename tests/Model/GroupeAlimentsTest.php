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
use PHPUnit\Framework\TestCase;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Serializer\SerializerKeys;

class GroupeAlimentsTest extends TestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new GroupeAliments();
        $obj->setCode("code");
        $obj->setNomFr("nomFr");
        $obj->setNomEng("nomEng");
        $obj->setCodeSousGroupe("codeSousGroupe");
        $obj->setNomFrSousGroupe("nomFrSousGroupe");
        $obj->setNomEngSousGroupe("nomEngSousGroupe");
        $obj->setCodeSousSousGroupe("codeSousSousGroupe");
        $obj->setNomFrSousSousGroupe("nomFrSousSousGroupe");
        $obj->setNomEngSousSousGroupe("nomEngSousSousGroupe");

        $res = $obj->jsonSerialize();
        $this->assertCount(9, $res);

        $this->assertEquals("code", $res[SerializerKeys::CODE]);
        $this->assertEquals("nomFr", $res[SerializerKeys::NOM_FR]);
        $this->assertEquals("nomEng", $res[SerializerKeys::NOM_ENG]);
        $this->assertEquals("codeSousGroupe", $res[SerializerKeys::CODE_SOUS_GROUPE]);
        $this->assertEquals("nomFrSousGroupe", $res[SerializerKeys::NOM_FR_SOUS_GROUPE]);
        $this->assertEquals("nomEngSousGroupe", $res[SerializerKeys::NOM_ENG_SOUS_GROUPE]);
        $this->assertEquals("codeSousSousGroupe", $res[SerializerKeys::CODE_SOUS_SOUS_GROUPE]);
        $this->assertEquals("nomFrSousSousGroupe", $res[SerializerKeys::NOM_FR_SOUS_SOUS_GROUPE]);
        $this->assertEquals("nomEngSousSousGroupe", $res[SerializerKeys::NOM_ENG_SOUS_SOUS_GROUPE]);
    }

    /**
     * Test setNomEngSousGroupe()
     *
     * @return void
     */
    public function testSetNomEngSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomEngSousGroupe("nomEngSousGroupe");
        $this->assertEquals("nomEngSousGroupe", $obj->getNomEngSousGroupe());
    }

    /**
     * Test setNomEngSousSousGroupe()
     *
     * @return void
     */
    public function testSetNomEngSousSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomEngSousSousGroupe("nomEngSousSousGroupe");
        $this->assertEquals("nomEngSousSousGroupe", $obj->getNomEngSousSousGroupe());
    }

    /**
     * Test setNomFrSousGroupe()
     *
     * @return void
     */
    public function testSetNomFrSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomFrSousGroupe("nomFrSousGroupe");
        $this->assertEquals("nomFrSousGroupe", $obj->getNomFrSousGroupe());
    }

    /**
     * Test setNomFrSousSousGroupe()
     *
     * @return void
     */
    public function testSetNomFrSousSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomFrSousSousGroupe("nomFrSousSousGroupe");
        $this->assertEquals("nomFrSousSousGroupe", $obj->getNomFrSousSousGroupe());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("ALIM_GRP", GroupeAliments::DOM_NODE_NAME);

        $obj = new GroupeALiments();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeSousGroupe());
        $this->assertNull($obj->getCodeSousSousGroupe());
        $this->assertNull($obj->getNomEng());
        $this->assertNull($obj->getNomEngSousGroupe());
        $this->assertNull($obj->getNomEngSousSousGroupe());
        $this->assertNull($obj->getNomFr());
        $this->assertNull($obj->getNomFrSousGroupe());
        $this->assertNull($obj->getNomFrSousSousGroupe());
    }
}
