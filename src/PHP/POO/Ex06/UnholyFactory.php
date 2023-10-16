<?php

namespace App\PHP\POO\Ex06;

use App\PHP\POO\Ex05\IFighter;

class UnholyFactory
{
    public array $fighter = [];

    public function absorb(IFighter $bonhomme): self
    {
        if ($bonhomme instanceof Fighter) {
            $name = $bonhomme->returnName();

            if (array_key_exists($name, $this->fighter)) {
                echo "(Factory already absorbed a fighter of type {$name})" . PHP_EOL;
            } else {
                echo "(Factory absorbed a fighter of type {$name})" . PHP_EOL;
                $this->fighter[$name] = $bonhomme;
            }
        } else {
            echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
        }

        return $this;
    }

    public function fabricate(string $fab): ?Fighter
    {
        if (array_key_exists($fab, $this->fighter)) {
            echo "(Factory fabricates a fighter of type {$fab})" . PHP_EOL;

            return clone $this->fighter[$fab];
        }
        echo "(Factory hasn't absorbed any fighter of type {$fab})" . PHP_EOL;

        return null;
    }
}
