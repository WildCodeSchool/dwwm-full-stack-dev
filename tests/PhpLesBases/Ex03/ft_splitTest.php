<?php

namespace App\Tests\PhpLesBases\Ex03;

use App\Tests\WildCodeSchoolTestCase;

final class ft_splitTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        'aaa test' => ['aaa test', ['aaa', 'test']],
        'test aaa' => ['test aaa', ['aaa', 'test']],
        'AAA aaa' => ['AAA aaa', ['AAA', 'aaa']],
        "Hello\t\tWorld AAA" => ["Hello\t\tWorld AAA", ['AAA', 'Hello', 'World']],
        'empty string' => ['', []],
        "\t\ttest \taaa\n   " => ["\t\ttest \taaa\n   ", ['aaa', 'test']],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testFtSplit(array $param): void
    {
        require_once static::getFileDir();

        self::assertSame($param[1], ft_split($param[0]));
    }
}
