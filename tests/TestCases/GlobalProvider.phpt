<?php

/**
 * @testCase
 * @dataProvider? ../databases.ini
 */

namespace TestCases;

use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class GlobalProvider extends \Tester\TestCase
{

    public function testMigrate()
    {
        Assert::true(true);
    }



    public function testAdapter()
    {
        Assert::true(true);
    }

}

\run(new GlobalProvider());
