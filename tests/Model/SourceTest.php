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
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Source test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class SourceTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Source();
        $obj->setCode("code");
        $obj->setCitationRef("citationRef");

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertEquals("code", $res[SerializerKeys::CODE]);
        $this->assertEquals("citationRef", $res[SerializerKeys::CITATION_REF]);
    }

    /**
     * Tests the setCitationRef() method.
     *
     * @return void
     */
    public function testSetCitationRef(): void {

        $obj = new Source();

        $obj->setCitationRef("citationRef");
        $this->assertEquals("citationRef", $obj->getCitationRef());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("SOURCES", Source::DOM_NODE_NAME);

        $obj = new Source();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCitationRef());
    }
}
