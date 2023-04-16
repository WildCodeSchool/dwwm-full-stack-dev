<?php

namespace App\Tests\PhpLesBases\Ex00;

use App\Tests\WildCodeSchoolTestCase;

final class hwTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testHw(): void
    {
        require_once static::getFileDir();
        $this->expectOutputString("Hello World\n");
    }
}
