<?php

namespace App\Tests\PHP\PhpLesBases\Ex15;

use App\Tests\PHP\WildCodeSchoolTestCase;
use Faker\Factory;

final class loupeTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    protected static function getExpectedFiles(): array
    {
        return [static::getActualFile(true), '.gitignore'];
    }

    private static function generatePage(array $params): array
    {
        return [
            sprintf('"<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title=\"%s\">%s</a>
<br /><a href=http://www.riven.com> %s <img src=wrong.image title=\"%s\"></a>
</body></html>"', $params[0], $params[2], $params[2], $params[1]),
            sprintf("<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title=\"%s\">%s</a>
<br /><a href=http://www.riven.com> %s <img src=wrong.image title=\"%s\"></a>
</body></html>\n", strtoupper($params[0]), strtoupper($params[2]), strtoupper($params[2]), strtoupper($params[1])),
        ];
    }

    /**
     * @dataProvider validContentProvider
     */
    public function testLoupe(array $params): void
    {
        $actualFileDir = str_replace('loupe.php', $params['fileName'], static::getFileDir());
        [$actual, $expected] = static::generatePage($params);
        shell_exec(sprintf('echo %s > %s', $actual, $actualFileDir));
        $result = static::execShellComand([$actualFileDir]);
        self::assertSame($expected, $result);
    }

    public function validContentProvider(): array
    {
        $faker = Factory::create('fr_FR');

        $contents = [];

        for ($i = 1; $i < 5; ++$i) {
            $fileName = "file{$i}.html";

            $contents[$fileName] = [[
                'fileName' => $fileName,
                $faker->name(),
                $faker->email(),
                $faker->text(50),
            ]];
        }

        return $contents;
    }
}
