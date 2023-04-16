<?php

namespace App\Tests\POO\Ex00;

use App\Tests\WildCodeSchoolTestCase;

final class TyrionTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testTyrionClass(): void
    {
        include_once __DIR__ . '../../../../resources/Tests/testEx00.php';

        $this->expectOutputString(
            "A Lannister is born !\n"
            . "My name is Tyrion\n"
            . "Short\n"
                . "Hear me roar!\n"
        );
    }
}
