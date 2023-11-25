<?php

namespace App\POO\Ex00;

use App\Resources\Classes\Lannister\Lannister;

class Tyrion extends Lannister
{
    public const SIZE = 'Short';
    public function __construct(bool $announce = true)
    {
        parent::__construct($announce);
        if ($announce) {
            echo "My name is Tyrion\n";
        }
    }

    private bool $incest = false;

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
