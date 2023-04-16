<?php

namespace App\Tests\PhpLesBases\Ex21;

use App\Tests\WildCodeSchoolTestCase;
use Faker\Factory;
use Symfony\Component\Process\Process;

final class createTest extends WildCodeSchoolTestCase
{
    public const INVALID_CONTENT = [
        'without login input' => [
            createTest::PASSWORD_INPUT_NAME => '1@password',
            createTest::SUBMIT_INPUT_NAME => createTest::SUBMIT_INPUT_VALUE,
        ],
        'with empty login input' => [
            createTest::USERNAME_INPUT_NAME => '',
            createTest::PASSWORD_INPUT_NAME => '1@password',
            createTest::SUBMIT_INPUT_NAME => createTest::SUBMIT_INPUT_VALUE,
        ],
        'without password input' => [
            createTest::USERNAME_INPUT_NAME => 'username',
            createTest::SUBMIT_INPUT_NAME => createTest::SUBMIT_INPUT_VALUE,
        ],
        'with empty password input' => [
            createTest::USERNAME_INPUT_NAME => 'username',
            createTest::PASSWORD_INPUT_NAME => '',
            createTest::SUBMIT_INPUT_NAME => createTest::SUBMIT_INPUT_VALUE,
        ],
        'without submit input' => [
            createTest::USERNAME_INPUT_NAME => 'username',
            createTest::PASSWORD_INPUT_NAME => '1@password',
        ],
        'with empty submit input' => [
            createTest::USERNAME_INPUT_NAME => 'username',
            createTest::PASSWORD_INPUT_NAME => '1@password',
            createTest::SUBMIT_INPUT_NAME => '',
        ],
    ];

    protected const DIR = __DIR__;
    protected const NEED_PHP_SERVER = true;

    private const PASSWORD_INPUT_NAME = 'passwd';
    private const SUBMIT_INPUT_NAME = 'submit';
    private const SUBMIT_INPUT_VALUE = 'OK';
    private const USERNAME_INPUT_NAME = 'login';

    private const ERROR_OUTPUT = "ERROR\n";
    private const SUCCES_OUTPUT = "OK\n";

    private const PASSWORD_FILE_PATH = '/private/passwd';

    private static $validContent = [
        "['login' => 'toto1', 'password' => 'titi1']" => ['toto1', 'titi1'],
    ];
    private static $hasContent = false;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $process = new Process(['rm', '-rf', str_replace(
            static::getActualFile(),
            static::PASSWORD_FILE_PATH,
            static::getFileDir()
        )]);
        $process->mustRun();
    }

    protected static function getExpectedFiles(): array
    {
        return [
            static::getActualFile(true),
            'index.php',
            '.gitignore',
        ];
    }

    /**
     * @dataProvider validContentProvider
     */
    public function testCanCreateWithValidCredentials(string $login, string $password): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $process = new Process([
            'curl',
            ...static::addParameters('-d', static::USERNAME_INPUT_NAME . "={$login}"),
            ...static::addParameters('-d', static::PASSWORD_INPUT_NAME . "={$password}"),
            ...static::addParameters('-d', static::SUBMIT_INPUT_NAME . '=' . static::SUBMIT_INPUT_VALUE),
            static::getActualFileUri(),
        ]);

        $process->mustRun();
        self::assertSame(static::SUCCES_OUTPUT, $process->getOutput());
        $passwordFilePath = str_replace(
            static::getActualFile(),
            static::PASSWORD_FILE_PATH,
            static::getFileDir()
        );
        self::assertFileExists($passwordFilePath, sprintf("Le fichier '%s' n'a pas été trouvé!", $passwordFilePath));
        $passwordFileContent = unserialize(file_get_contents($passwordFilePath));
        self::assertNotEmpty($passwordFileContent, 'Trop bizarre !!!! ta base de données est vide. on dirait que les utilisateurs ne sont pas enregistrés');
        $userCredentials = array_filter($passwordFileContent, static fn (array $dbRow) => $dbRow[static::USERNAME_INPUT_NAME] === $login);
        self::assertNotEmpty($userCredentials, "L'utilisateur n'est pas sauvegardé mince alors.");
        $userCredentials = end($userCredentials);
        static::assertNotSame(
            $password,
            $userCredentials[static::PASSWORD_INPUT_NAME],
            'Un mot de passe ne doit jamais être stocké en clair, RGPD toussa toussa!!!!!'
        );
        self::assertTrue(
            password_verify($password, $userCredentials[static::PASSWORD_INPUT_NAME]),
            "L'ago de hashage n'est pas le bon mais tu y es presque! encore 4865 à essayer. indice => la longueur du mot de passe de l'exemple"
        );
    }

    /**
     * @dataProvider validContentProvider
     */
    public function testCanNotCreateWithUsedCredentials(string $login, string $password): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $process = new Process([
            'curl',
            ...static::addParameters('-d', static::USERNAME_INPUT_NAME . "={$login}"),
            ...static::addParameters('-d', static::PASSWORD_INPUT_NAME . "={$password}"),
            ...static::addParameters('-d', static::SUBMIT_INPUT_NAME . '=' . static::SUBMIT_INPUT_VALUE),
            static::getActualFileUri(),
        ]);

        $process->mustRun();
        self::assertSame(static::ERROR_OUTPUT, $process->getOutput());
    }

    /**
     * @dataProvider invalidContentProvider
     */
    public function testCreateWithInvalidCredentials(array $params): void
    {
        if (!static::$fileExists) {
            $this->markTestIncomplete('');
        }

        $process = new Process([
            'curl',
            ...(isset($params[static::USERNAME_INPUT_NAME]) ? static::addParameters('-d', static::USERNAME_INPUT_NAME . '=' . $params[static::USERNAME_INPUT_NAME]) : []),
            ...(isset($params[static::PASSWORD_INPUT_NAME]) ? static::addParameters('-d', static::PASSWORD_INPUT_NAME . '=' . $params[static::PASSWORD_INPUT_NAME]) : []),
            ...(isset($params[static::SUBMIT_INPUT_NAME]) ? static::addParameters('-d', static::SUBMIT_INPUT_NAME . '=' . $params[static::SUBMIT_INPUT_NAME]) : []),
            static::getActualFileUri(),
        ]);

        $process->mustRun();
        self::assertSame(static::ERROR_OUTPUT, $process->getOutput());
    }

    public function validContentProvider(): array
    {
        if (static::$hasContent) {
            return static::$validContent;
        }

        $faker = Factory::create('fr_FR');
        $limit = mt_rand(2, 10);

        for ($i = 0; $i < $limit; ++$i) {
            $username = $faker->unique()->userName();
            $password = $faker->unique()->word();
            static::$validContent["['login' => '{$username}', 'password' => '{$password}']"] = [$username, $password];
        }

        static::$hasContent = true;

        return static::$validContent;
    }
}
