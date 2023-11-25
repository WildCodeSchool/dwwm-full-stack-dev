<?php
// Ex06

namespace App\POO\Ex06;

use App\Resources\Classes\Archer;
use App\Resources\Classes\Assassin;
use App\Resources\Classes\FootSoldier;

class UnholyFactory
{
    private array $fighterTemplates = [];
    private array $actualFighters = [];

    public function __construct()
    {
        return $this;
    }

    public function absorb($fighter)
    {
        if (null !== $fighter) {
            if (!$fighter instanceof Fighter) {
                echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;

                return $this;
            }
            if (!in_array($fighter->getType(), $this->fighterTemplates)) {
                $this->fighterTemplates[] = $fighter->getType();
                echo '(Factory absorbed a fighter of type ' . $fighter->getType() . ")" . PHP_EOL;

                return $this;
            }
            echo '(Factory already absorbed a fighter of type ' . $fighter->getType() . ")" . PHP_EOL;
            return $this;
        }

        return $this;
    }

    public function fabricate(string $fighter): ?Fighter
    {
        if (!in_array($fighter, $this->fighterTemplates)) {
            echo "(Factory hasn't absorbed any fighter of type " . $fighter . ")" . PHP_EOL;

            return null;
        }

        $newFighter = null;

        switch ($fighter) {
            case 'foot soldier':
                $newFighter = new FootSoldier();

                break;
            case 'archer':
                $newFighter = new Archer();

                break;
            case 'assassin':
                $newFighter = new Assassin();

                break;
        }

        if (null !== $newFighter) {
            echo '(Factory fabricates a fighter of type ' . $fighter . ")" . PHP_EOL;

            return $newFighter;
        }

        return null;
    }
}
