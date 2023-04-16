<?php

namespace App\Tests\PhpLesBases\Ex09;

use App\Tests\WildCodeSchoolTestCase;

final class ssap2Test extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        '0 a' => [['0', 'a'], "a\n0\n"],
        'toto tutu 4234 "_hop XXX" "##" "1948372 AhAhAh"' => [
            ['toto', 'tutu', '4234', '_hop XXX', '##', '1948372 AhAhAh'],
            "AhAhAh\ntoto\ntutu\nXXX\n1948372\n4234\n##\n_hop\n",
        ],
        '@ "##" __test 9 0 Z z a A ' => [
            ['@', '##', '__test', '9', '0', 'Z', 'z', 'a', 'A '],
            "a\nA\nZ\nz\n0\n9\n##\n@\n__test\n",
        ],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testSsap2(array $params): void
    {
        $result = static::execShellComand($params[0]);

        if (empty($params[1])) {
            self::assertNull($result);
        } else {
            self::assertSame($params[1], $result);
        }
    }
}
