<?php

namespace App\Tests\PhpLesBases\Ex02;

use App\Tests\WildCodeSchoolTestCase;
use Faker\Factory;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Process;

final class oddevenTest extends WildCodeSchoolTestCase
{
    public const INVALID_CONTENT = [
        'bad input' => ['test'],
        '99cosmos' => ['99cosmos'],
        'empty input' => [''],
        'null input' => [null],
    ];

    protected const DIR = __DIR__;

    private const EXPECTED_QUESTION = 'Entrez un nombre: ';
    private const FAILURE_STATE = 'Votre programme s\'est terminé de manière innatendue';
    private const INVALID_OUTPUT_FORMAT = "'%s' n'est pas un chiffre";
    private const VALID_OUTPUT_FORMAT = 'Le chiffre %s est %s';

    private static function execScript(Process $process, InputStream $inputStream, array $numbersList, bool $isValidContent = true): void
    {
        $numbersArrayLength = count($numbersList);
        $currentNumberIndex = 0;

        $process->waitUntil(function (string $type, string $buffer) use ($numbersList, $inputStream, $numbersArrayLength, &$currentNumberIndex, $isValidContent) {
            $currentNumber = $numbersList[$currentNumberIndex];
            $operator = '';

            self::assertTrue(Process::OUT === $type, static::FAILURE_STATE);
            self::assertNotEmpty($buffer);
            self::assertStringContainsString(static::EXPECTED_QUESTION, $buffer);

            if ($buffer === static::EXPECTED_QUESTION) {
                $inputStream->write("{$currentNumber}\n");

                return false;
            }

            if ($isValidContent) {
                $operator = $currentNumber % 2 ? 'Impair' : 'Pair';
            }

            static::assertStringContainsString(
                sprintf(
                    $isValidContent ? static::VALID_OUTPUT_FORMAT : static::INVALID_OUTPUT_FORMAT,
                    $currentNumber,
                    $operator
                ),
                $buffer
            );

            if (++$currentNumberIndex < $numbersArrayLength) {
                $inputStream->write("{$numbersList[$currentNumberIndex]}\n");
            }

            return $currentNumberIndex === $numbersArrayLength;
        });
    }

    /**
     * @dataProvider validContentProvider
     */
    public function testOddevenWithValidInput(array $numbersList): void
    {
        $input = new InputStream();
        $process = new Process(['php', static::getFileDir()]);
        $process->setInput($input)->setTimeout(300)->start();

        static::execScript($process, $input, $numbersList);

        $input->close();
        $process->stop();
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testOddevenWithInvalidInput(array $numbersList): void
    {
        $input = new InputStream();
        $process = new Process(['php', static::getFileDir()]);
        $process->setInput($input)->start();

        static::execScript($process, $input, $numbersList, false);

        $input->close();
        $process->stop();
    }

    public function validContentProvider(): array
    {
        $list = [];
        $faker = Factory::create('fr_FR');
        $limit = mt_rand(20, 200);

        for ($i = 0; $i < $limit; ++$i) {
            $number = $faker->unique()->numberBetween(-9999, 9999);

            $list["test with {$limit} random numbers"][0][] = $number;
        }

        return $list;
    }
}
