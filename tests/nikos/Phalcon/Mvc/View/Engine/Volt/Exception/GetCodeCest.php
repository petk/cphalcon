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

namespace Phalcon\Test\Unit\Mvc\View\Engine\Volt\Exception;

use UnitTester;

class GetCodeCest
{
    /**
     * Tests Phalcon\Mvc\View\Engine\Volt\Exception :: getCode()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcViewEngineVoltExceptionGetCode(UnitTester $I)
    {
        $I->wantToTest('Mvc\View\Engine\Volt\Exception - getCode()');

        $I->skipTest('Need implementation');
    }
}