<?php

namespace App\Tests\PHP\POO\Ex02;

use App\Tests\PHP\WildCodeSchoolTestCase;

final class TargaryenTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testTargaryenClass(): void
    {
        include_once __DIR__ . '/../../../../resources/PHP/Tests/testEx02.php';

        $this->expectOutputString(
            "Viserys burns alive\n"
            . "Daenerys emerges naked but unharmed\n"
        );
    }
}
