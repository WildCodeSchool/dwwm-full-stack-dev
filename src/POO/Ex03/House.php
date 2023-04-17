<?php

namespace App\POO\Ex03;

abstract class House
{
    public const INTRODUCE_HOUSE = 'House';

    abstract public function getHouseMotto(): string;

    abstract public function getHouseName(): string;

    abstract public function getHouseSeat(): string;

    public function introduce(): void
    {
        printf(
            "%s %s of %s : \"%s\"\n",
            static::INTRODUCE_HOUSE,
            $this->getHouseName(),
            $this->getHouseSeat(),
            $this->getHouseMotto()
        );
    }
}
