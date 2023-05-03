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
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Composition test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class CompositionTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Composition();
        $obj->setCodeAliment("codeAliment");
        $obj->setCodeConstituant("codeConstituant");
        $obj->setTeneur("teneur");
        $obj->setMin("min");
        $obj->setMax("max");
        $obj->setCodeConfiance("codeConfiance");
        $obj->setCodeSource("codeSource");

        $res = $obj->jsonSerialize();
        $this->assertCount(7, $res);

        $this->assertEquals("codeAliment", $res[SerializerKeys::CODE_ALIMENT]);
        $this->assertEquals("codeConstituant", $res[SerializerKeys::CODE_CONSTITUANT]);
        $this->assertEquals("teneur", $res[SerializerKeys::TENEUR]);
        $this->assertEquals("min", $res[SerializerKeys::MIN]);
        $this->assertEquals("max", $res[SerializerKeys::MAX]);
        $this->assertEquals("codeConfiance", $res[SerializerKeys::CODE_CONFIANCE]);
        $this->assertEquals("codeSource", $res[SerializerKeys::CODE_SOURCE]);
    }

    /**
     * Test setCodeAliment()
     *
     * @return void
     */
    public function testSetCodeAliment(): void {

        $obj = new Composition();

        $obj->setCodeAliment("codeAliment");
        $this->assertEquals("codeAliment", $obj->getCodeAliment());
    }

    /**
     * Test setCodeConfiance()
     *
     * @return void
     */
    public function testSetCodeConfiance(): void {

        $obj = new Composition();

        $obj->setCodeConfiance("codeConfiance");
        $this->assertEquals("codeConfiance", $obj->getCodeConfiance());
    }

    /**
     * Test setCodeConstituant()
     *
     * @return void
     */
    public function testSetCodeConstituant(): void {

        $obj = new Composition();

        $obj->setCodeConstituant("codeConstituant");
        $this->assertEquals("codeConstituant", $obj->getCodeConstituant());
    }

    /**
     * Test setCodeSource()
     *
     * @return void
     */
    public function testSetCodeSource(): void {

        $obj = new Composition();

        $obj->setCodeSource("codeSource");
        $this->assertEquals("codeSource", $obj->getCodeSource());
    }

    /**
     * Test setMax()
     *
     * @return void
     */
    public function testSetMax(): void {

        $obj = new Composition();

        $obj->setMax("max");
        $this->assertEquals("max", $obj->getMax());
    }

    /**
     * Test setMin()
     *
     * @return void
     */
    public function testSetMin(): void {

        $obj = new Composition();

        $obj->setMin("min");
        $this->assertEquals("min", $obj->getMin());
    }

    /**
     * Test setTeneur()
     *
     * @return void
     */
    public function testSetTeneur(): void {

        $obj = new Composition();

        $obj->setTeneur("teneur");
        $this->assertEquals("teneur", $obj->getTeneur());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("COMPO", Composition::DOM_NODE_NAME);

        $obj = new Composition();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCodeAliment());
        $this->assertNull($obj->getCodeConfiance());
        $this->assertNull($obj->getCodeConstituant());
        $this->assertNull($obj->getCodeSource());
        $this->assertNull($obj->getMax());
        $this->assertNull($obj->getMin());
        $this->assertNull($obj->getTeneur());
    }
}
