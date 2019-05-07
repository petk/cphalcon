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

namespace Phalcon\Test\Unit\Cli\Router\Route;

use UnitTester;

class GetNameCest
{
    /**
     * Tests Phalcon\Cli\Router\Route :: getName()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function cliRouterRouteGetName(UnitTester $I)
    {
        $I->wantToTest('Cli\Router\Route - getName()');

        $I->skipTest('Need implementation');
    }
}