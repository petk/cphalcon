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

namespace Phalcon\Test\Unit\Session\Bag;

use UnitTester;

class SetDICest
{
    /**
     * Tests Phalcon\Session\Bag :: setDI()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function sessionBagSetDI(UnitTester $I)
    {
        $I->wantToTest('Session\Bag - setDI()');

        $I->skipTest('Need implementation');
    }
}