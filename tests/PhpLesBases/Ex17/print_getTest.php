<?php

namespace App\Tests\PhpLesBases\Ex17;

use App\Tests\WildCodeSchoolTestCase;
use Faker\Factory;

final class print_getTest extends WildCodeSchoolTestCase
{
    public const INVALID_CONTENT = [
        'without query parameters' => [['key' => '', 'value' => ''], ''],
    ];

    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testPrintGetWithValidQueryParameters(string $expected, array $queryParametersList): void
    {
        foreach ($queryParametersList as ['key' => $key, 'value' => $value]) {
            if (!empty($key) && !empty($value)) {
                $_GET[$key] = $value;
            }
        }

        ob_start();

        include_once static::getFileDir();
        ob_get_contents();
        $actual = ob_get_clean();

        self::assertSame($expected, $actual);
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testPrintGetWithInvalidQueryParameters(array $params): void
    {
        $_GET = [];

        foreach ($params[0] as ['key' => $key, 'value' => $value]) {
            if (!empty($key) && !empty($value)) {
                $_GET[$key] = $value;
            }
        }

        ob_start();

        include_once static::getFileDir();
        ob_get_contents();
        $actual = ob_get_clean();

        self::assertSame($params[1], $actual);
    }

    public function validContentProvider(): array
    {
        $queryParameters = '';
        $expected = '';
        $list = [];
        $limit = mt_rand(1, 20);
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < $limit; ++$i) {
            $key = $faker->unique()->word();
            $value = $faker->unique()->word();
            $list[] = ['key' => $key, 'value' => $value];
            $queryParameters .= ('' === $queryParameters ? '?' : '&') . "{$key}={$value}";
            $expected .= "{$key}: {$value}\n";
        }

        return [$queryParameters => [$expected, $list]];
    }
}
