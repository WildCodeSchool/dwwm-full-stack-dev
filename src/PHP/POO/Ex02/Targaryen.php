<?php

namespace App\PHP\POO\Ex02;

class Targaryen
{
    public function resistsFire(): bool
    {
        return false;
    }

    public function getBurned(): string
    {
        return $this->resistsFire() ? 'emerges naked but unharmed' : 'burns alive';
    }
}
