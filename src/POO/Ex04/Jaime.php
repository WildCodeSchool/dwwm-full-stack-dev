<?php

namespace App\POO\Ex04;

use App\POO\Ex00\Tyrion;
use App\Resources\Classes\Lannister\Lannister;

class Jaime extends Lannister
{
    private bool $incest = true;

    public function sleepWith($target): void
    {
        if ($target instanceof Lannister) {
            if (!$this->incest) {
                echo "Not even if I'm drunk !\n";
                return;
            }
            if ($target instanceof Tyrion) {
                echo "Not even if I'm drunk !\n";
                return;
            }
            echo "With pleasure, but only in a tower in Winterfell, then.\n";
            return;
        }
        echo "Let's do this.\n";
        return;
    }
}