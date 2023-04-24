<?php

namespace App\POO\Ex01;

abstract class Greyjoy
{
    protected string $familyMotto = 'We do not sow';

    public function getFamilyMotto(): string
    {
        return $this->familyMotto;
    }

    public function announceMotto(): void
    {
        echo $this->getFamilyMotto();
    }
}
