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

namespace Phalcon\Test\Unit\Config\Adapter\Php;

use UnitTester;

class SetStateCest
{
    /**
     * Unit Tests Phalcon\Config\Adapter\Php :: __set_state()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-25
     */
    public function configAdapterPhpSetState(UnitTester $I)
    {
        $I->wantToTest('Config\Adapter\Php - __set_state()');

        $I->skipTest('Need implementation');
    }
}