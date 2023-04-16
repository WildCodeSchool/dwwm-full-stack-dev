<?php

namespace App\Tests\PhpLesBases\Ex12;

use App\Tests\WildCodeSchoolTestCase;

final class search_itTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        'toto "key1:val1" "key2:val2" "toto:42"' => [['toto', 'key1:val1', 'key2:val2', 'toto:42'], '42'],
        'toto "toto:val1" "key2:val2" "toto:42"' => [['toto', 'toto:val1', 'key2:val2', 'toto:42'], '42'],
        'toto "toto:" "toto" "toto:42"' => [['toto', 'toto:', 'toto', 'toto:42'], '42'],
        '"0" "key1:val1" "key2:val2" "0:hop"' => [['0', 'key1:val1', 'key2:val2', '0:hop'], 'hop'],
    ];

    public const INVALID_CONTENT = [
        'toto' => [['toto'], null],
        'toto "toto:" "toto"' => [['toto', 'toto:', 'toto'], null],
        '""' => [[], null],
        'toto "42"' => [['toto', '42'], null],
    ];

    private const TESTED_FILE = 'search_it!.php';

    protected static function getFileDir(): string
    {
        return str_replace('tests', 'src', __DIR__ . '/' . static::TESTED_FILE);
    }

    protected static function getExpectedFiles(): array
    {
        return [static::TESTED_FILE];
    }

    /**
     * @dataProvider validContentProvider
     */
    public function testSearchItWithValidParameters(array $params): void
    {
        $result = static::execShellComand($params[0]);

        self::assertSame("{$params[1]}\n", $result);
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testSearchItWithInvalidParameters(array $params): void
    {
        self::assertEmpty(static::execShellComand($params[0]));
    }
}
