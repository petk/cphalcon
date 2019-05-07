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

namespace Phalcon\Test\Unit\Session\Manager;

use UnitTester;

class GetDICest
{
    /**
     * Tests Phalcon\Session\Manager :: getDI()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function sessionManagerGetDI(UnitTester $I)
    {
        $I->wantToTest('Session\Manager - getDI()');

        $I->skipTest('Need implementation');
    }
}