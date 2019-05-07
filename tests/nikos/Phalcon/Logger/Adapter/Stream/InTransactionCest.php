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

namespace Phalcon\Test\Unit\Logger\Adapter\Stream;

use UnitTester;

class InTransactionCest
{
    /**
     * Tests Phalcon\Logger\Adapter\Stream :: inTransaction()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function loggerAdapterStreamInTransaction(UnitTester $I)
    {
        $I->wantToTest('Logger\Adapter\Stream - inTransaction()');

        $I->skipTest('Need implementation');
    }
}