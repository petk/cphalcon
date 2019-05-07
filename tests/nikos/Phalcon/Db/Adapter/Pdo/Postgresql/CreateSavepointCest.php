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

namespace Phalcon\Test\Unit\Db\Adapter\Pdo\Postgresql;

use UnitTester;

class CreateSavepointCest
{
    /**
     * Tests Phalcon\Db\Adapter\Pdo\Postgresql :: createSavepoint()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function dbAdapterPdoPostgresqlCreateSavepoint(UnitTester $I)
    {
        $I->wantToTest('Db\Adapter\Pdo\Postgresql - createSavepoint()');

        $I->skipTest('Need implementation');
    }
}