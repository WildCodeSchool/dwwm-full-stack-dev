<?php

namespace App\Tests\PhpLesBases\Ex11;

use App\Tests\WildCodeSchoolTestCase;

final class do_op_2Test extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        '1 + 3' => [['1+3'], 4],
        '2 * 3' => [['2 * 3'], 6],
        '6 / 2' => [['42 / 2'], 21],
        '0 / 5' => [['0 / 5'], 0],
        ' 1  +  3' => [[' 1  +  3'], 4],
        ' 1 " *"  3' => [[' 1  *  3'], 3],
        ' 42 %  3' => [[' 42 %  3'], 0],
    ];

    public const INVALID_CONTENT = [
        'without argument' => [[], 'Incorrect Parameters'],
        'to many arguments' => [['1 + 1', 'test'], 'Incorrect Parameters'],
        'bad argumests [a t 3]' => [['a t 3'], 'Syntax Error'],
        'bad argumests [toto]' => [['toto'], 'Syntax Error'],
        'bad argumests [six6*7sept]' => [['six6*7sept'], 'Syntax Error'],
        'bad argumests [6**7]' => [['6**7'], 'Syntax Error'],
    ];

    public const BONUS_CONTENT = [
        'negative numbers [-1 + 3]' => [['-1 + 3'], 2],
        'negative numbers [-2 * 3]' => [['-2 * 3'], -6],
        'negative numbers [-4 / 2]' => [['-4 / 2'], -2],
        'negative numbers [-4 - 2]' => [['-4 - 2'], -6],
        'negative numbers [-4 % 2]' => [['-4 % 2'], 0],
        'signed positive numbers [+4 + 2]' => [['+4 + 2'], 6],
        'decimal numbers [1.5 + 2]' => [['1.5 + 2'], 3.5],
        'decimal numbers [1.5 * 2]' => [['1.5 * 4'], 6],
        'decimal numbers [2.4 / 2]' => [['2.4 / 2'], 1.2],
        'decimal numbers [2.4 % 2]' => [['2.4%2'], 0.4],
    ];

    protected const DIR = __DIR__;

    private static $bonusFailed = false;

    /**
     * @dataProvider validContentProvider
     */
    public function testDoOp2WithValidParameter(array $params): void
    {
        $result = static::execShellComand($params[0]);

        self::assertSame("{$params[1]}\n", $result);
    }

    /**
     * @dataProvider invalidContentProvider
     *
     * @depends testDoOp2WithValidParameter
     */
    public function testDoOp2WithInalidParameters(array $params): void
    {
        $result = static::execShellComand($params[0]);

        self::assertSame("{$params[1]}\n", $result);
    }

    /**
     * @dataProvider bonusContentProvider
     *
     * @depends testDoOp2WithInalidParameters
     */
    public function testDoOp2WithBonus(array $params): void
    {
        switch (do_op_2Test::$bonusFailed) {
            case true:
                break;
            default:
                $result = static::execShellComand($params[0]);

                if ($result !== "{$params[1]}\n") {
                    do_op_2Test::$bonusFailed = true;
                } else {
                    self::assertSame("{$params[1]}\n", $result);
                }

                break;
        }

        if (do_op_2Test::$bonusFailed) {
            $this->markTestSkipped('Bonus non comptabilisé');
        }
    }
}
