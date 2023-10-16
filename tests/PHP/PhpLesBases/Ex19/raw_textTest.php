<?php

namespace App\Tests\PHP\PhpLesBases\Ex19;

use App\Tests\PHP\WildCodeSchoolTestCase;
use Symfony\Component\Process\Process;

final class raw_textTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;
    protected const NEED_PHP_SERVER = true;

    protected const EXPECTED_VALUE = '<html><body>Hello</body></html>';

    public function testRawText(): void
    {
        $process = new Process(['curl', static::getActualFileUri()]);

        $process->mustRun();
        self::assertTrue($process->isSuccessful());
        self::assertSame(static::EXPECTED_VALUE, $process->getOutput());
    }
}
