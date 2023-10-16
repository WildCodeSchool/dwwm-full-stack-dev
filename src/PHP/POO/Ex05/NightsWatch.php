<?php

namespace App\PHP\POO\Ex05;

class NightsWatch
{
    private array $members = [];

    public function recruit($member): void
    {
        $this->members[] = $member;
    }

    public function fight(): void
    {
        foreach ($this->members as $member) {
            $member instanceof IFighter ? $member->fight() : 0;
        }
    }
}
