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

namespace Phalcon\Test\Unit\Http\Response;

use UnitTester;

class GetCookiesCest
{
    /**
     * Tests Phalcon\Http\Response :: getCookies()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function httpResponseGetCookies(UnitTester $I)
    {
        $I->wantToTest('Http\Response - getCookies()');

        $I->skipTest('Need implementation');
    }
}