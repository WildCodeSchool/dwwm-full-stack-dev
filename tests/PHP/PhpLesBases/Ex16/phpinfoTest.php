<?php

namespace App\Tests\PHP\PhpLesBases\Ex16;

use App\Tests\PHP\WildCodeSchoolTestCase;

final class phpinfoTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testPhpinfo(): void
    {
        ob_start();
        phpinfo();
        ob_get_contents();
        $expected = ob_get_clean();

        ob_start();

        require_once static::getFileDir();
        ob_get_contents();
        $actual = ob_get_clean();

        self::assertSame($expected, $actual);
    }
}
