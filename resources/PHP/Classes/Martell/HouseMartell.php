<?php

namespace App\Resources\PHP\Classes\Martell;

use App\PHP\POO\Ex03\House;

class HouseMartell extends House
{
    public function getHouseName(): string
    {
        return 'Martell';
    }

    public function getHouseMotto(): string
    {
        return 'Unbowed, Unbent, Unbroken';
    }

    public function getHouseSeat(): string
    {
        return 'Sunspear';
    }
}
