<?php

namespace App\Resources\PHP\Classes;

use App\PHP\POO\Ex05\IFighter;

class Llama implements IFighter
{
    public function fight(string $target = ''): void
    {
        echo "* spits at {$target} *" . PHP_EOL;
    }
}
