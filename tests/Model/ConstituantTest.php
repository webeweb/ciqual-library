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
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Constituant test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class ConstituantTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Constituant();
        $obj->setCode("code");
        $obj->setNomFr("nomFr");
        $obj->setNomEng("nomEng");

        $res = $obj->jsonSerialize();
        $this->assertCount(3, $res);

        $this->assertEquals("code", $res[SerializerKeys::CODE]);
        $this->assertEquals("nomFr", $res[SerializerKeys::NOM_FR]);
        $this->assertEquals("nomEng", $res[SerializerKeys::NOM_ENG]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("CONST", Constituant::DOM_NODE_NAME);

        $obj = new Constituant();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getNomEng());
        $this->assertNull($obj->getNomFr());
    }
}
