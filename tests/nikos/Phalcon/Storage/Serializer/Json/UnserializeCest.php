<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Storage\Serializer\Json;

use UnitTester;

class UnserializeCest
{
    /**
     * Tests Phalcon\Storage\Serializer\Json :: unserialize()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function storageSerializerJsonUnserialize(UnitTester $I)
    {
        $I->wantToTest('Storage\Serializer\Json - unserialize()');

        $I->skipTest('Need implementation');
    }
}