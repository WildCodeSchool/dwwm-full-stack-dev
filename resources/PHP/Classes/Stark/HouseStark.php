<?php

namespace App\Resources\PHP\Classes\Stark;

use App\PHP\POO\Ex03\House;

class HouseStark extends House
{
    public function getHouseName(): string
    {
        return 'Stark';
    }

    public function getHouseMotto(): string
    {
        return 'Winter is coming';
    }

    public function getHouseSeat(): string
    {
        return 'Winterfell';
    }
}
