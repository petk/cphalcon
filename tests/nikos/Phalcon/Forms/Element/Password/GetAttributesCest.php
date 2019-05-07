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

namespace Phalcon\Test\Unit\Forms\Element\Password;

use UnitTester;

class GetAttributesCest
{
    /**
     * Tests Phalcon\Forms\Element\Password :: getAttributes()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function formsElementPasswordGetAttributes(UnitTester $I)
    {
        $I->wantToTest('Forms\Element\Password - getAttributes()');

        $I->skipTest('Need implementation');
    }
}