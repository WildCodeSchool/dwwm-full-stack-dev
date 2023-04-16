<?php

namespace App\Tests\POO\Ex03;

use App\Tests\WildCodeSchoolTestCase;
use Symfony\Component\Process\Process;

final class HouseTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testHouseClass(): void
    {
        include_once __DIR__ . '../../../../resources/Tests/testEx03-1.php';

        $this->expectOutputString(
            "House Stark of Winterfell : \"Winter is coming\"\n"
                . "House Martell of Sunspear : \"Unbowed, Unbent, Unbroken\"\n"
        );
    }

    public function testExtendedIncompleteHouseClass(): void
    {
        $process = new Process(['php', __DIR__ . '/../../../resources/Tests/testEx03-2.php']);
        $process->run();

        self::assertMatchesRegularExpression(
            '/\s*Fatal error:.*3 abstract methods and must therefore be declared abstract or implement the remaining methods/',
            $process->getErrorOutput()
        );
    }
}
