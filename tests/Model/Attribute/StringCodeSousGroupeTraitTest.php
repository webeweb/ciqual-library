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
use WBW\Library\Ciqual\Tests\Fixtures\Model\Attribute\TestStringCodeSousGroupeTrait;

/**
 * String code sous-groupe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Tests\Model\Attribute
 */
class StringCodeSousGroupeTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeSousGroupe() method.
     *
     * @return void
     */
    public function testSetCodeSousGroupe(): void {

        $obj = new TestStringCodeSousGroupeTrait();

        $obj->setCodeSousGroupe("codeSousGroupe");
        $this->assertEquals("codeSousGroupe", $obj->getCodeSousGroupe());
    }
}