<?php

namespace App\PHP\POO\Ex04;

use App\PHP\POO\Ex00\Tyrion;
use App\Resources\PHP\Classes\Lannister\Cersei;
use App\Resources\PHP\Classes\Lannister\Lannister;

class Jaime extends Lannister
{
    public function sleepWith($spleeper): string
    {
        $answer = "Let's do this.\n";

        switch ($spleeper) {
            case $spleeper instanceof Tyrion:
                $answer = "Not even if I'm drunk !\n";

                break;
            case $spleeper instanceof Cersei:
                $answer = "With pleasure, but only in a tower in Winterfell, then.\n";

                break;
            default:
                break;
        }

        echo $answer;

        return $answer;
    }
}
