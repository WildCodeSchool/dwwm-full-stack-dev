<?php

namespace App\Tests\PhpLesBases\Ex01;

use App\Tests\WildCodeSchoolTestCase;

final class mlxTest extends WildCodeSchoolTestCase
{
    protected const DIR = __DIR__;

    public function testMlx(): void
    {
        $filePath = static::getFileDir();
        self::assertLessThanOrEqual(
            100,
            filesize($filePath),
            'Votre fichier ne doit pas contenir plus de 100 caractères'
        );

        require_once $filePath;
        $output = $this->getActualOutputForAssertion();

        self::assertEquals(1001, strlen($output), 'Il y a trop ou pas assez de caractères');
        self::assertMatchesRegularExpression("/^X{1000}\n$/", $output, 'Le retour n\'est pas correct');
    }
}
