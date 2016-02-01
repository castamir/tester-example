<?php

/**
 * @testCase
 */

namespace TestCases;

use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class MethodProvider extends \Tester\TestCase
{

    public function testMigrate()
    {
        Assert::true(true);
    }



    /**
     * @dataProvider? ../databases.ini
     */
    public function testAdapter()
    {
        Assert::true(true);
    }

}

\run(new MethodProvider());
