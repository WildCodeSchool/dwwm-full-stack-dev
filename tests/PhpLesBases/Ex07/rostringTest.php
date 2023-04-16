<?php

namespace App\Tests\PhpLesBases\Ex07;

use App\Tests\WildCodeSchoolTestCase;

final class rostringTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        "'\"hello world aaa    \" fslkdjf'" => [['hello world aaa    ', 'fslkdjf'], 'world aaa hello'],
        'sdfkjsdkl sdkjfskljdf' => [['sdfkjsdkl', 'sdkjfskljdf'], 'sdfkjsdkl'],
        'without parameter' => [[], ''],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testRostring(array $params): void
    {
        $result = static::execShellComand($params[0]);

        if (empty($params[1])) {
            self::assertEmpty($result);
        } else {
            self::assertSame($params[1] . "\n", $result);
        }
    }
}
