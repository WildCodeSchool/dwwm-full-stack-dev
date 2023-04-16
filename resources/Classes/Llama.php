<?php

namespace App\Resources\Classes;

use App\POO\Ex05\IFighter;

class Llama implements IFighter
{
    public function fight(string $target = ''): void
    {
        echo "* spits at {$target} *" . PHP_EOL;
    }
}
