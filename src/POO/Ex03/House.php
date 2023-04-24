<?php

namespace App\POO\Ex03;

abstract class House
{
    abstract public function getHouseName(): string;
    abstract public function getHouseMotto(): string;
    abstract public function getHouseSeat(): string;

    public function introduce(): void
    {
        echo "House " . $this->getHouseName() . " of " . $this->getHouseSeat() . ' : "' . $this->getHouseMotto() . '"' . "\n";
    }
}