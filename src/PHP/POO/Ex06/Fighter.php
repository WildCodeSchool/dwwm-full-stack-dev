<?php

namespace App\PHP\POO\Ex06;

use App\PHP\POO\Ex05\IFighter;

abstract class Fighter implements IFighter
{
    public function __construct(private string $name)
    {
    }

    abstract public function fight(string $target = ''): void;

    public function returnName(): string
    {
        return $this->name;
    }
}
