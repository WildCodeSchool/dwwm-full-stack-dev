<?php

namespace App\Resources\PHP\Classes;

use App\PHP\POO\Ex06\Fighter;

class Assassin extends Fighter
{
    public function __construct()
    {
        parent::__construct('assassin');
    }

    public function fight(string $target = ''): void
    {
        echo "* creeps behind {$target} and stabs at it *" . PHP_EOL;
    }
}
