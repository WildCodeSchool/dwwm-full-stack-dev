<?php

namespace App\Tests\PhpLesBases\Ex04;

use App\Tests\WildCodeSchoolTestCase;
use Faker\Factory;

final class aff_paramTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    /**
     * @dataProvider validContentProvider
     */
    public function testAffParam(?array $params = []): void
    {
        $result = static::execShellComand($params ?? []);

        self::assertSame(empty($params) ? '' : implode("\n", $params) . "\n", $result);
    }

    public function validContentProvider(): array
    {
        $limit = mt_rand(5, 20);
        $faker = Factory::create('fr_FR');
        $parameters = [];

        for ($i = 0; $i < $limit; ++$i) {
            $parameters[] = $faker->unique()->word();
        }

        $formattedRandomParameters = implode(' ', $parameters);

        return [
            'toto ahah foo bar quax' => [['toto', 'ahah', 'foo', 'bar', 'quax']],
            'with null parameter' => [null],
            $formattedRandomParameters => [$parameters],
        ];
    }
}
