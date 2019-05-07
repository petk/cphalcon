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

namespace Phalcon\Test\Unit\Tag\Exception;

use UnitTester;

class WakeupCest
{
    /**
     * Tests Phalcon\Tag\Exception :: __wakeup()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function tagExceptionWakeup(UnitTester $I)
    {
        $I->wantToTest('Tag\Exception - __wakeup()');

        $I->skipTest('Need implementation');
    }
}