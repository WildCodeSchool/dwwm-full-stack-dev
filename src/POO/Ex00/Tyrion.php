<?php

namespace App\POO\Ex00;

use App\Resources\Classes\Lannister\Lannister;

class Tyrion extends Lannister
{
    public const SIZE = 'Short';

    public function __construct()
    {
        parent::__construct();
        echo "My name is Tyrion\n";
    }
}
