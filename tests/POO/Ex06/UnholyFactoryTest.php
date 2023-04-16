<?php

namespace App\Tests\POO\Ex06;

use App\Tests\WildCodeSchoolTestCase;
use Symfony\Component\Process\Process;

final class UnholyFactoryTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    protected static function getExpectedFiles(): array
    {
        return [
            static::getActualFile(true),
            'Fighter.php',
        ];
    }

    public function testUnholyFactoryClass(): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        include_once __DIR__ . '../../../../resources/Tests/testEx06-1.php';

        $this->expectOutputString(
            "(Factory absorbed a fighter of type foot soldier)\n"
                . "(Factory already absorbed a fighter of type foot soldier)\n"
                . "(Factory absorbed a fighter of type archer)\n"
                . "(Factory absorbed a fighter of type assassin)\n"
                . "(Factory can't absorb this, it's not a fighter)\n"
                . "(Factory fabricates a fighter of type foot soldier)\n"
                . "(Factory hasn't absorbed any fighter of type llama)\n"
                . "(Factory fabricates a fighter of type foot soldier)\n"
                . "(Factory fabricates a fighter of type archer)\n"
                . "(Factory fabricates a fighter of type foot soldier)\n"
                . "(Factory fabricates a fighter of type assassin)\n"
                . "(Factory fabricates a fighter of type foot soldier)\n"
                . "(Factory fabricates a fighter of type archer)\n"
                . "* draws his sword and runs towards the Hound *\n"
                . "* draws his sword and runs towards Tyrion *\n"
                . "* draws his sword and runs towards Podrick *\n"
                . "* draws his sword and runs towards the Hound *\n"
                . "* draws his sword and runs towards Tyrion *\n"
                . "* draws his sword and runs towards Podrick *\n"
                . "* shoots arrows at the Hound *\n"
                . "* shoots arrows at Tyrion *\n"
                . "* shoots arrows at Podrick *\n"
                . "* draws his sword and runs towards the Hound *\n"
                . "* draws his sword and runs towards Tyrion *\n"
                . "* draws his sword and runs towards Podrick *\n"
                . "* creeps behind the Hound and stabs at it *\n"
                . "* creeps behind Tyrion and stabs at it *\n"
                . "* creeps behind Podrick and stabs at it *\n"
                . "* draws his sword and runs towards the Hound *\n"
                . "* draws his sword and runs towards Tyrion *\n"
                . "* draws his sword and runs towards Podrick *\n"
                . "* shoots arrows at the Hound *\n"
                . "* shoots arrows at Tyrion *\n"
                . "* shoots arrows at Podrick *\n"
        );
    }

    public function testExtendedIncompleteUnholyFactoryClass(): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $process = new Process(['php', __DIR__ . '/../../../resources/Tests/testEx06-2.php']);
        $process->run();

        self::assertMatchesRegularExpression(
            '/\s*Fatal error:.*1 abstract method and must therefore be declared abstract or implement the remaining methods/',
            $process->getErrorOutput()
        );
    }
}
