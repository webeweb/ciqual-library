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

use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Composition test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class CompositionTest extends AbstractTestCase {

    /**
     * Tests the setCodeAliment() method.
     *
     * @return void
     */
    public function testSetCodeAliment(): void {

        $obj = new Composition();

        $obj->setCodeAliment("codeAliment");
        $this->assertEquals("codeAliment", $obj->getCodeAliment());
    }

    /**
     * Tests the setCodeConfiance() method.
     *
     * @return void
     */
    public function testSetCodeConfiance(): void {

        $obj = new Composition();

        $obj->setCodeConfiance("codeConfiance");
        $this->assertEquals("codeConfiance", $obj->getCodeConfiance());
    }

    /**
     * Tests the setCodeConstituant() method.
     *
     * @return void
     */
    public function testSetCodeConstituant(): void {

        $obj = new Composition();

        $obj->setCodeConstituant("codeConstituant");
        $this->assertEquals("codeConstituant", $obj->getCodeConstituant());
    }

    /**
     * Tests the setCodeSource() method.
     *
     * @return void
     */
    public function testSetCodeSource(): void {

        $obj = new Composition();

        $obj->setCodeSource("codeSource");
        $this->assertEquals("codeSource", $obj->getCodeSource());
    }

    /**
     * Tests the setMax() method.
     *
     * @return void
     */
    public function testSetMax(): void {

        $obj = new Composition();

        $obj->setMax("max");
        $this->assertEquals("max", $obj->getMax());
    }

    /**
     * Tests the setMin() method.
     *
     * @return void
     */
    public function testSetMin(): void {

        $obj = new Composition();

        $obj->setMin("min");
        $this->assertEquals("min", $obj->getMin());
    }

    /**
     * Tests the setTeneur() method.
     *
     * @return void
     */
    public function testSetTeneur(): void {

        $obj = new Composition();

        $obj->setTeneur("teneur");
        $this->assertEquals("teneur", $obj->getTeneur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("COMPO", Composition::DOM_NODE_NAME);

        $obj = new Composition();

        $this->assertNull($obj->getCodeAliment());
        $this->assertNull($obj->getCodeConfiance());
        $this->assertNull($obj->getCodeConstituant());
        $this->assertNull($obj->getCodeSource());
        $this->assertNull($obj->getMax());
        $this->assertNull($obj->getMin());
        $this->assertNull($obj->getTeneur());
    }
}