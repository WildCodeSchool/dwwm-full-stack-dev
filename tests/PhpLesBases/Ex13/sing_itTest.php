<?php

namespace App\Tests\PhpLesBases\Ex13;

use App\Tests\WildCodeSchoolTestCase;

final class sing_itTest extends WildCodeSchoolTestCase
{
    private const EXPECTED_OUTPUT = "Tout simplement pour qu'en feuilletant le sujet on ne s'aperçoive pas de la nature de l'exo.\n";
    private const EXPECTED_PARAMETER = 'mais pourquoi cette demo ?';
    private const TESTED_FILE = 'sing_it!.php';

    protected static function getExpectedFiles(): array
    {
        return [static::TESTED_FILE];
    }

    protected static function getFileDir(): string
    {
        return str_replace('tests', 'src', __DIR__ . '/' . static::TESTED_FILE);
    }

    public function testSingIt(): void
    {
        self::assertSame(static::EXPECTED_OUTPUT, static::execShellComand([static::EXPECTED_PARAMETER]));
    }
}
