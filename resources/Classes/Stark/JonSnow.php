<?php

namespace App\Resources\Classes\Stark;

use App\POO\Ex05\IFighter;

class JonSnow extends Stark implements IFighter
{
    public function fight(string $target = ''): void
    {
        echo '* looses his wolf on the enemy, and charges with courage *' . PHP_EOL;
    }

    public function isABastard(): bool
    {
        return true;
    }
}
