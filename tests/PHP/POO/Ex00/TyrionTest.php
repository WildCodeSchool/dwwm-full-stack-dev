<?php

namespace App\Tests\PHP\POO\Ex00;

use App\Tests\PHP\WildCodeSchoolTestCase;

final class TyrionTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testTyrionClass(): void
    {
        include_once __DIR__ . '/../../../../resources/PHP/Tests/testEx00.php';

        $this->expectOutputString(
            "A Lannister is born !\n"
            . "My name is Tyrion\n"
            . "Short\n"
                . "Hear me roar!\n"
        );
    }
}
