<?php

namespace App\Resources\Classes;

use App\POO\Ex06\Fighter;

class CrippledSoldier extends Fighter
{
    public function __construct()
    {
        parent::__construct('crippled soldier');
    }
}
