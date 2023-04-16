<?php

namespace App\Resources\Classes\Lannister;

abstract class Lannister
{
    public const BIRTH_ANNOUNCEMENT = "A Lannister is born !\n";
    public const HOUSE_MOTTO = 'Hear me roar!';
    public const SIZE = 'Average';

    public function __construct(protected bool $needBirthAnnouncement = true)
    {
        $this->announceBirth();
    }

    public function getSize(): string
    {
        return static::SIZE;
    }

    public function getHouseMotto(): string
    {
        return Lannister::HOUSE_MOTTO;
    }

    protected function announceBirth(): void
    {
        if ($this->needBirthAnnouncement) {
            echo self::BIRTH_ANNOUNCEMENT;
        }
    }
}
