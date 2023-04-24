<?php

namespace App\POO\Ex02;

use App\Resources\Classes\Targaryen\Daenerys;

class Targaryen
{
    public function getBurned(): string
    {
        if ($this instanceof Daenerys) {
            return 'emerges naked but unharmed';
        }

        return 'burns alive';
    }
}
