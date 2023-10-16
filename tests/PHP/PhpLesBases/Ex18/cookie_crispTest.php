<?php

namespace App\Tests\PHP\PhpLesBases\Ex18;

use App\Tests\PHP\WildCodeSchoolTestCase;
use Faker\Factory;
use Symfony\Component\Process\Process;

final class cookie_crispTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;
    protected const NEED_PHP_SERVER = true;

    private const ACTION_DEL = 'del';
    private const ACTION_GET = 'get';
    private const ACTION_SET = 'set';

    private const COOKIE_ACTION = 'action';
    private const COOKIE_NAME = 'name';
    private const COOKIE_VALUE = 'value';

    private const COOKIE_FILE_DIR = 'cook.txt';

    private static function getCommandLineParameters(string $action, string $name, ?string $value = null): array
    {
        return [
            'curl',
            $action === static::ACTION_GET ? '-b' : '-c',
            static::COOKIE_FILE_DIR,
            static::buildUriWithQueryParameters($action, $name, $value),
        ];
    }

    private static function buildUriWithQueryParameters(string $action, string $name, ?string $value = null): string
    {
        $url = static::getBaseUri() . '/Ex18/cookie_crisp.php?';
        $queryParameters = [
            static::COOKIE_ACTION => $action,
            static::COOKIE_NAME => $name,
        ];

        switch ($action) {
            case static::ACTION_GET:
            case static::ACTION_DEL:
                $url .= http_build_query($queryParameters);

                break;
            default:
                $url .= http_build_query([...$queryParameters, static::COOKIE_VALUE => $value]);

                break;
        }

        return $url;
    }

    /**
     * @dataProvider validContentProvider
     */
    public function testCookieCrisp(string $name, string $value): void
    {
        // Set cookie without output
        $process = new Process(static::getCommandLineParameters(static::ACTION_SET, $name, $value));
        $process->mustRun();
        self::assertTrue($process->isSuccessful());
        self::assertEmpty($process->getOutput());
        self::assertFileExists(static::COOKIE_FILE_DIR);

        // display cookie's value with new line
        $process = new Process(static::getCommandLineParameters(static::ACTION_GET, $name));
        $process->mustRun();
        self::assertTrue($process->isSuccessful());
        self::assertSame("{$value}\n", $process->getOutput());

        // delete cookie
        $process = new Process(static::getCommandLineParameters(static::ACTION_DEL, $name));
        $process->mustRun();
        self::assertTrue($process->isSuccessful());
        self::assertEmpty($process->getOutput());

        // after
        $process = new Process(static::getCommandLineParameters(static::ACTION_GET, $name));
        $process->mustRun();
        self::assertTrue($process->isSuccessful());
        self::assertEmpty($process->getOutput());
    }

    public function validContentProvider(): array
    {
        $faker = Factory::create('fr_FR');
        $limit = mt_rand(5, 20);
        $contents = [];

        for ($i = 0; $i < $limit; ++$i) {
            $name = $faker->unique()->word();
            $value = $faker->unique()->word();
            $contents["name={$name}&value={$value}"] = [$name, $value];
        }

        return $contents;
    }
}
