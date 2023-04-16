<?php

namespace App\Tests\PhpLesBases\Ex20;

use App\Tests\WildCodeSchoolTestCase;
use Faker\Factory;
use Symfony\Component\Process\Process;

final class members_onlyTest extends WildCodeSchoolTestCase
{
    public const VALID_CONTENT = [
        'wild-code-school:jaimelespetitsponeys' => [
            ['wild-code-school', 'jaimelespetitsponeys'],
            "<html><body>\nBonjour wild-code-school<br />\n</body></html>\n",
        ],
    ];

    protected const DIR = __DIR__;
    protected const NEED_PHP_SERVER = true;

    /**
     * @dataProvider validContentProvider
     */
    public function testMembersOnlyWithValidUser(array $params): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $username = $params[0][0];
        $password = $params[0][1];
        $process = new Process(['curl', '--user', "{$username}:{$password}", static::getActualFileUri()]);

        $process->mustRun();
        self::assertTrue($process->isSuccessful());
        self::assertSame($params[1], $process->getOutput());
        $process->stop();
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testMembersOnlyWithInvalidUser(string $username, string $password): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $stderrOutput = false;
        $stdoutOutput = false;
        $process = new Process(['curl', '-v', '--user', "{$username}:{$password}", static::getActualFileUri()]);

        $process->mustRun(function (string $type, string $buffer) use (&$stderrOutput, &$stdoutOutput) {
            switch ($type) {
                case Process::OUT:
                    $stdoutOutput .= $buffer;

                    break;
                case Process::ERR:
                    $stderrOutput .= $buffer;

                    break;
                default:
                    break;
            }
        });
        self::assertSame(
            "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n",
            $stdoutOutput
        );
        self::assertStringContainsString("Server auth using Basic with user '{$username}'", $stderrOutput);
        self::assertStringContainsString('HTTP/1.0 401 Unauthorized', $stderrOutput);
        self::assertStringContainsString("www-Authenticate: Basic realm=''Espace membres''", $stderrOutput);
        $process->stop();
    }

    public function invalidContentProvider(): array
    {
        $faker = Factory::create('fr_FR');
        $limit = mt_rand(2, 10);
        $contents = [];

        for ($i = 0; $i < $limit; ++$i) {
            $username = $faker->unique()->userName();
            $password = $faker->unique()->word();
            $contents["{$username}:{$password}"] = [$username, $password];
        }

        return $contents;
    }
}
