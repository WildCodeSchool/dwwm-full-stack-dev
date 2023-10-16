<?php

namespace App\Tests\PHP\PhpLesBases\Ex14;

use App\Tests\PHP\WildCodeSchoolTestCase;
use Faker\Factory;
use IntlDateFormatter;

final class one_more_timeTest extends WildCodeSchoolTestCase
{
    public const INVALID_CONTENT = [
        'without parameter' => [null],
        'with empty parameter' => [''],
        'Mercreday 1stJuily 99' => ['Mercreday 1stJuily 99'],
        'Mardis 12 Novembre 2013 12:02:21' => ['Mardis 12 Novembre 2013 12:02:21'],
        'Mardi 00 Novembre 2013 12:02:21' => ['Mardi 00 Novembre 2013 12:02:21'],
        'Mardi 32 Novembre 2013 12:02:21' => ['Mardi 32 Novembre 2013 12:02:21'],
        'Mardi 12 Novembres 2013 12:02:21' => ['Mardi 12 Novembres 2013 12:02:21'],
        'Mardi 12 Novembre 2013 24:02:21' => ['Mardi 12 Novembre 2013 24:02:21'],
        'Mardi 12 Novembre 2013 12:60:21' => ['Mardi 12 Novembre 2013 12:60:21'],
        'Mardi 12 Novembre 2013 12:02:60' => ['Mardi 12 Novembre 2013 12:02:60'],
        'lundi 29 fevrier 2021 12:02:60' => ['lundi 29 fevrier 2021 12:02:60'],
    ];

    protected const DIR = __DIR__;

    private const PATTERN = '/([A-Za-z]+) (\\d{1,2}) ([A-Za-z]+) (\\d{4}) à (\\d{2}):(\\d{2}):(\\d{2})/';

    /**
     * @dataProvider validContentProvider
     *
     * @param mixed $expectedTimeStamp
     */
    public function testOneMoreTimeWithValidParameters(array $formattedDate, $expectedTimeStamp): void
    {
        $result = static::execShellComand($formattedDate);

        self::assertSame("{$expectedTimeStamp}\n", $result);
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testOneMoreTimeWithInvalidParameters(array $params): void
    {
        $result = static::execShellComand($params);

        empty($params[0]) ?
            self::assertEmpty($result)
            : self::assertSame("Wrong Format\n", $result);
    }

    public function testScriptDoesNotAdjustTimestamp(): void
    {
        self::assertDoesNotMatchRegularExpression(
            '/[\+-]\s*3600/',
            file_get_contents(static::getFileDir())
        );
    }

    public function validContentProvider(): array
    {
        $faker = Factory::create('fr_FR');
        $contents = [
            'Mardi 12 Novembre 2013 12:02:21' => [['Mardi 12 Novembre 2013 12:02:21'], 1384254141],
            'mardi 12 novembre 2013 12:02:21' => [['mardi 12 novembre 2013 12:02:21'], 1384254141],
        ];

        for ($i = 0; $i < 10; ++$i) {
            $matches = [];
            $date = $faker->dateTime();
            $formattedDate = IntlDateFormatter::create('fr_FR')->format($date);

            preg_match(static::PATTERN, $formattedDate, $matches);

            // var_dump($formattedDate, $matches);
            if (empty($matches)) {
                continue;
            }

            [, $day, $dayNumber, $month, $year, $hour, $minute, $second] = $matches;

            $formattedDate = sprintf(
                '%s %s %s %s %s:%s:%s',
                $day,
                $dayNumber,
                $month,
                $year,
                $hour,
                $minute,
                $second
            );

            $contents[$formattedDate] = [[$formattedDate], $date->getTimestamp() - 3600];
        }

        return $contents;
    }
}
