<?php

namespace App\Tests\PHP\POO\Ex04;

use App\Tests\PHP\WildCodeSchoolTestCase;

final class JaimeTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testJaimeClass(): void
    {
        include_once __DIR__ . '/../../../../resources/PHP/Tests/testEx04.php';

        $this->expectOutputString(
            "Not even if I'm drunk !\n"
                . "Let's do this.\n"
                . "With pleasure, but only in a tower in Winterfell, then.\n"
                . "Not even if I'm drunk !\n"
                . "Let's do this.\n"
                . "Not even if I'm drunk !\n"
        );
    }
}
