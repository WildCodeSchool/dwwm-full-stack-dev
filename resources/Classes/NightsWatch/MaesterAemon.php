<?php

namespace App\Resources\Classes\NightsWatch;

use App\POO\Ex02\Targaryen;

class MaesterAemon extends Targaryen
{
    public function sendRavens(): void
    {
        echo '* sends a raven carrying an important message *' . PHP_EOL;
    }
}
