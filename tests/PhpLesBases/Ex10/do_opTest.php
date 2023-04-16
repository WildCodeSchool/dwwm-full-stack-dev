<?php

namespace App\Tests\PhpLesBases\Ex10;

use App\Tests\WildCodeSchoolTestCase;

final class do_opTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        '1 + 3' => [[1, '+', 3], 4],
        '2 "*" 3' => [[2, '*', 3], 6],
        '6 / 2' => [[6, '/', 2], 3],
        '0 / 0' => [[0, '/', 0], 0],
        '" 1" " +" " 3"' => [[' 1', ' +', ' 3'], 4],
        '" 1" " *" " 3"' => [[' 1', ' *', ' 3'], 3],
        '" 42" "% " 3' => [[' 42', '% ', 3], 0],
    ];

    public const INVALID_CONTENT = [
        '1 argument' => [[1]],
        '2 argument' => [[1, '+']],
        'bad argumests [a + 3]' => [['a', '+', 3]],
        'bad argumests [3 + a]' => [[3, '+', 'a']],
        'bad argumests [3 r 3]' => [[3, 'r', 'a']],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testDoOpWithValidParameters(array $params): void
    {
        $result = static::execShellComand($params[0]);

        self::assertSame("{$params[1]}\n", $result);
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testDoOpWithInalidParameters(array $params): void
    {
        $result = static::execShellComand($params[0]);

        self::assertSame("Incorrect Parameters\n", $result);
    }
}
