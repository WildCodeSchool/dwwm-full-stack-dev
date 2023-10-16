<?php

namespace App\Tests\PHP\POO\Ex05;

use App\Tests\PHP\WildCodeSchoolTestCase;
use Symfony\Component\Process\Process;

final class NightsWatchTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    protected static function getExpectedFiles(): array
    {
        return [
            static::getActualFile(true),
            'IFighter.php',
        ];
    }

    public function testNightsWatchClass(): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        include_once __DIR__ . '/../../../../resources/PHP/Tests/testEx05-1.php';

        $this->expectOutputString(
            "* looses his wolf on the enemy, and charges with courage *\n"
                . "* flees, finds a girl, grows a spine, and defends her to the bitter end *\n"
        );
    }

    public function testExtendedIncompleteHouseClass(): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $process = new Process(['php', __DIR__ . '/../../../../resources/PHP/Tests/testEx05-2.php']);
        $process->run();

        self::assertMatchesRegularExpression(
            '/\s*Fatal error:.*1 abstract method and must therefore be declared abstract or implement the remaining methods/',
            $process->getErrorOutput()
        );
    }
}
