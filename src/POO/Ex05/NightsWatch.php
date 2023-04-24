<?php

namespace App\POO\Ex05;

class NightsWatch
{
    private array $recruits = [];

    public function recruit($target): void
    {
        $this->recruits[] = $target;
    }

    public function fight(): void
    {
        foreach ($this->recruits as $recruit) {
            if ($recruit instanceof IFighter) {
                $recruit->fight();
            }
        }
    }
}