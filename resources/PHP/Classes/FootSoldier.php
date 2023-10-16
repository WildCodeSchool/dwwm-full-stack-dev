<?php

namespace App\Resources\PHP\Classes;

use App\PHP\POO\Ex06\Fighter;

class FootSoldier extends Fighter
{
    public function __construct()
    {
        parent::__construct('foot soldier');
    }

    public function fight(string $target = ''): void
    {
        echo "* draws his sword and runs towards {$target} *" . PHP_EOL;
    }
}
