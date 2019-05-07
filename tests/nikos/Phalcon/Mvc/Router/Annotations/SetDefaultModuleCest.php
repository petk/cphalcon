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

namespace Phalcon\Test\Unit\Mvc\Router\Annotations;

use UnitTester;

class SetDefaultModuleCest
{
    /**
     * Tests Phalcon\Mvc\Router\Annotations :: setDefaultModule()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcRouterAnnotationsSetDefaultModule(UnitTester $I)
    {
        $I->wantToTest('Mvc\Router\Annotations - setDefaultModule()');

        $I->skipTest('Need implementation');
    }
}