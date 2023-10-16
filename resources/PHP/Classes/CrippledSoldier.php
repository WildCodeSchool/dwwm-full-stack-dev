<?php

namespace App\Resources\PHP\Classes;

use App\PHP\POO\Ex06\Fighter;

class CrippledSoldier extends Fighter
{
    public function __construct()
    {
        parent::__construct('crippled soldier');
    }
}
