<?php

namespace App\Resources\Classes\Greyjoy;

use App\POO\Ex01\Greyjoy;

class Euron extends Greyjoy
{
    public function announceMotto(): void
    {
        echo "{$this->familyMotto}\n";
    }
}
