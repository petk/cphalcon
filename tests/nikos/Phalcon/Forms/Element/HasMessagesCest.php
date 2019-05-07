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

namespace Phalcon\Test\Unit\Forms\Element;

use UnitTester;

class HasMessagesCest
{
    /**
     * Tests Phalcon\Forms\Element :: hasMessages()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function formsElementHasMessages(UnitTester $I)
    {
        $I->wantToTest('Forms\Element - hasMessages()');

        $I->skipTest('Need implementation');
    }
}