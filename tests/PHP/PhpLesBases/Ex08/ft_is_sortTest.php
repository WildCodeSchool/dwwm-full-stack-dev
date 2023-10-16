<?php

namespace App\Tests\PHP\PhpLesBases\Ex08;

use App\Tests\PHP\WildCodeSchoolTestCase;

final class ft_is_sortTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        '"!/@#;^", "42", "Hello World", "salut", "zZzZzZz"' => [
            ['!/@#;^', '42', 'Hello World', 'salut', 'zZzZzZz'],
            true,
        ],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testFtIsSort(array $params): void
    {
        require_once static::getFileDir();

        if ($params[1]) {
            self::assertTrue(ft_is_sort($params[0]));
        } else {
            self::assertFalse(ft_is_sort($params[0]));
        }
    }
}
