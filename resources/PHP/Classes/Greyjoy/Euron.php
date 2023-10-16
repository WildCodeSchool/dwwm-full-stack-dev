<?php

namespace App\Resources\PHP\Classes\Greyjoy;

use App\PHP\POO\Ex01\Greyjoy;

class Euron extends Greyjoy
{
    public function announceMotto(): void
    {
        echo "{$this->familyMotto}\n";
    }
}
