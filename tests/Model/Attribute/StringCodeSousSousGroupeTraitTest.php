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
use WBW\Library\Ciqual\Tests\Fixtures\Model\Attribute\TestStringCodeSousSousGroupeTrait;

/**
 * String code sous sous-groupe trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Model\Attribute
 */
class StringCodeSousSousGroupeTraitTest extends AbstractTestCase {

    /**
     * Tests setCodeSousSousGroupe()
     *
     * @return void
     */
    public function testSetCodeSousSousGroupe(): void {

        $obj = new TestStringCodeSousSousGroupeTrait();

        $obj->setCodeSousSousGroupe("codeSousSousGroupe");
        $this->assertEquals("codeSousSousGroupe", $obj->getCodeSousSousGroupe());
    }
}
