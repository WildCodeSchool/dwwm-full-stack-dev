<?php

namespace App\Tests\PhpLesBases\Ex06;

use App\Tests\WildCodeSchoolTestCase;

final class ssapTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        'foo bar "yo man" "A moi compte, deux mots" Xibul' => [
            ['foo', 'bar', 'yo man', 'A moi compte, deux mots', 'Xibul'],
            "A\nXibul\nbar\ncompte,\ndeux\nfoo\nman\nmoi\nmots\nyo\n",
        ],
        'hello world Test' => [
            ['hello', 'world', 'Test'],
            "Test\nhello\nworld\n",
        ],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testSsap(array $params): void
    {
        self::assertSame($params[1], static::execShellComand($params[0]));
    }
}
