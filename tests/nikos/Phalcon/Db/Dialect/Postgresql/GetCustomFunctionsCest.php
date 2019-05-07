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

namespace Phalcon\Test\Unit\Db\Dialect\Postgresql;

use UnitTester;

class GetCustomFunctionsCest
{
    /**
     * Tests Phalcon\Db\Dialect\Postgresql :: getCustomFunctions()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function dbDialectPostgresqlGetCustomFunctions(UnitTester $I)
    {
        $I->wantToTest('Db\Dialect\Postgresql - getCustomFunctions()');

        $I->skipTest('Need implementation');
    }
}