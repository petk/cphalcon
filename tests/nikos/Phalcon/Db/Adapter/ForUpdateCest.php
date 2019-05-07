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

namespace Phalcon\Test\Unit\Db\Adapter;

use UnitTester;

class ForUpdateCest
{
    /**
     * Tests Phalcon\Db\Adapter :: forUpdate()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function dbAdapterForUpdate(UnitTester $I)
    {
        $I->wantToTest('Db\Adapter - forUpdate()');

        $I->skipTest('Need implementation');
    }
}