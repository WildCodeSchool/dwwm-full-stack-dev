<?php

namespace App\Resources\Classes;

use App\POO\Ex05\IFighter;

class Varys implements IFighter
{
    public function pretendToFight(): void
    {
        echo '* finds someone to fight for him *' . PHP_EOL;
    }
}
