<?php

namespace App\Resources\PHP\Classes;

use App\PHP\POO\Ex05\IFighter;

class Varys implements IFighter
{
    public function pretendToFight(): void
    {
        echo '* finds someone to fight for him *' . PHP_EOL;
    }
}
