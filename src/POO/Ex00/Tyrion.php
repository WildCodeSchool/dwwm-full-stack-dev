<?php

namespace App\POO\Ex00;

use App\Resources\Classes\Lannister\Lannister;

class Tyrion extends Lannister
{
    public const BIRTH_ANNOUNCEMENT = "My name is Tyrion\n";
    public const SIZE = 'Short';

    public function __construct(protected bool $needBirthAnnouncement = true)
    {
        $this->announceBirth();
    }

    public function sleepWith($spleeper): string
    {
        $answer = sprintf("%s\n", $spleeper instanceof Lannister ? "Not even if I'm drunk !" : "Let's do this.");

        echo $answer;

        return $answer;
    }

    protected function announceBirth(): void
    {
        if (!$this->needBirthAnnouncement) {
            return;
        }

        parent::announceBirth();
        echo self::BIRTH_ANNOUNCEMENT;
    }
}
