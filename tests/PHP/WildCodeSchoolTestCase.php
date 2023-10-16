<?php

namespace App\Tests\PHP;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

abstract class WildCodeSchoolTestCase extends TestCase
{
    public const VALID_CONTENT = [];
    public const BONUS_CONTENT = [];
    public const INVALID_CONTENT = [];

    protected const DIR = __DIR__;
    protected const NEED_PHP_SERVER = false;
    protected const TEST_HOST = 'localhost';
    protected const TEST_PORT = '8080';

    private const ACCEPTED_FILES = ['.', '..', 'README.md'];

    protected static ?Process $process = null;
    protected static bool $fileExists = false;

    public static function setUpBeforeClass(): void
    {
        if (static::$fileExists = file_exists(static::getFileDir())) {
            static::assertFileExists(static::getFileDir());

            if (static::NEED_PHP_SERVER) {
                static::$process = new Process(['php', '-S', self::getHostAndPort(), '-t', 'src/PhpLesBases']);
                static::$process->start();
                usleep(100000); // wait for server to get going
            }

            $dirContent = array_diff(scandir(dirname(static::getFileDir())), self::ACCEPTED_FILES);
            self::assertSame(
                array_diff(static::getExpectedFiles(), $dirContent),
                array_diff($dirContent, static::getExpectedFiles()),
                "C'est gentil pour le cadeau mais le rendu n'est pas correct"
            );
        }
    }

    public static function tearDownAfterClass(): void
    {
        if (static::NEED_PHP_SERVER) {
            static::$process->stop(3, 2);
        }
    }

    public static function getContent(array $content): array
    {
        return array_map(static fn (?array $data) => [$data], $content);
    }

    protected static function addParameters(string ...$parameters): array
    {
        return $parameters;
    }

    protected static function getBaseUri(): string
    {
        return 'http://' . static::getHostAndPort();
    }

    protected static function getActualFileUri(): string
    {
        $arr = explode('/', static::DIR);

        return static::getBaseUri() . '/' . end($arr) . static::getActualFile();
    }

    protected static function getActualFile(bool $onlyClassName = false): string
    {
        $class = explode('\\', get_called_class());
        $class = str_replace('Test', '', end($class));

        return ($onlyClassName ? '' : '/') . "{$class}.php";
    }

    protected static function getFileDir(): string
    {
        return str_replace('tests', 'src', static::DIR . static::getActualFile());
    }

    protected static function execShellComand(array $parameters = []): ?string
    {
        $filePath = static::getFileDir();
        $process = new Process(['php', $filePath, ...$parameters]);
        $process->mustRun();

        return $process->getOutput();
    }

    protected static function getExpectedFiles(): array
    {
        return [static::getActualFile(true)];
    }

    private static function getHostAndPort(): string
    {
        return static::TEST_HOST . ':' . static::TEST_PORT;
    }

    public function bonusContentProvider(): array
    {
        return self::getContent(static::BONUS_CONTENT);
    }

    public function invalidContentProvider(): array
    {
        return self::getContent(static::INVALID_CONTENT);
    }

    public function validContentProvider(): array
    {
        return self::getContent(static::VALID_CONTENT);
    }
}
