<?php

namespace App\Tests\PHP\PhpLesBases\Ex05;

use App\Tests\PHP\WildCodeSchoolTestCase;

final class epur_strTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        'Salut         comment ca    va       ?' => [
            ['Salut         comment ca    va       ?'],
            'Salut comment ca va ?',
        ],
        '     Hello        World ' => [
            ['     Hello        World '],
            'Hello World',
        ],
    ];

    public const INVALID_CONTENT = [
        'many parameters' => [
            ['test1', 'test2'],
            null,
        ],
        'without parameter' => [
            [],
            null,
        ],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testEpurStrWithValidParameters(array $params): void
    {
        $result = static::execShellComand($params[0]);
        self::assertSame("{$params[1]}\n", $result);
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testEpurStrWithInvalidParameters(array $params): void
    {
        $result = static::execShellComand($params[0]);

        self::assertEmpty($result);
    }
}
