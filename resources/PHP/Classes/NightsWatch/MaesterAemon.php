<?php

namespace App\Resources\PHP\Classes\NightsWatch;

use App\PHP\POO\Ex02\Targaryen;

class MaesterAemon extends Targaryen
{
    public function sendRavens(): void
    {
        echo '* sends a raven carrying an important message *' . PHP_EOL;
    }
}
