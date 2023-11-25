<?php

namespace App\POO\Ex06;

abstract class Fighter
{
    protected string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    abstract public function fight(string $target): void;

    public function getType(): string
    {
        return $this->type;
    }
}
