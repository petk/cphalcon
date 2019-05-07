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

namespace Phalcon\Test\Unit\Http\Request\Exception;

use UnitTester;

class WakeupCest
{
    /**
     * Tests Phalcon\Http\Request\Exception :: __wakeup()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function httpRequestExceptionWakeup(UnitTester $I)
    {
        $I->wantToTest('Http\Request\Exception - __wakeup()');

        $I->skipTest('Need implementation');
    }
}