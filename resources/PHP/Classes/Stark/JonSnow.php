<?php

namespace App\Resources\PHP\Classes\Stark;

use App\PHP\POO\Ex05\IFighter;

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
