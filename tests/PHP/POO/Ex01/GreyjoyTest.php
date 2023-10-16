<?php

namespace App\Tests\PHP\POO\Ex01;

use App\Tests\PHP\WildCodeSchoolTestCase;
use Error;

final class GreyjoyTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testGreyjoyClass(): void
    {
        include_once __DIR__ . '/../../../../resources/PHP/Tests/testEx01-1.php';

        $this->expectOutputString("We do not sow\n");
    }

    public function testGreyjoyClassWithError(): void
    {
        $this->expectException(Error::class);

        include_once __DIR__ . '/../../../../resources/PHP/Tests/testEx01-2.php';

        $this->expectExceptionMessageMatches('/Error: Cannot access protected property App\\Resources\\Classes\\Greyjoy\\Euron::\$familyMotto/');
    }
}
