<?php

namespace App\Resources\Classes;

use App\POO\Ex06\Fighter;

class Archer extends Fighter
{
    public function __construct()
    {
        parent::__construct('archer');
    }

    public function fight(string $target = ''): void
    {
        echo "* shoots arrows at {$target} *" . PHP_EOL;
    }
}
