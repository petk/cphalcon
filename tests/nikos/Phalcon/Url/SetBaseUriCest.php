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

namespace Phalcon\Test\Unit\Url;

use UnitTester;

class SetBaseUriCest
{
    /**
     * Tests Phalcon\Url :: setBaseUri()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function urlSetBaseUri(UnitTester $I)
    {
        $I->wantToTest('Url - setBaseUri()');

        $I->skipTest('Need implementation');
    }
}