<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\POO\Ex06\UnholyFactory;
use App\Resources\Classes\Archer;
use App\Resources\Classes\Assassin;
use App\Resources\Classes\FootSoldier;
use App\Resources\Classes\Llama;

$uf = (new UnholyFactory())
    ->absorb(new FootSoldier())
    ->absorb(new FootSoldier())
    ->absorb(new Archer())
    ->absorb(new Assassin())
    ->absorb(new Llama());

$requested_fighters = [
    'foot soldier',
    'llama',
    'foot soldier',
    'archer',
    'foot soldier',
    'assassin',
    'foot soldier',
    'archer',
];

$actual_fighters = [];

foreach ($requested_fighters as $rf) {
    $f = $uf->fabricate($rf);

    if (null !== $f) {
        array_push($actual_fighters, $f);
    }
}

$targets = ['the Hound', 'Tyrion', 'Podrick'];

foreach ($actual_fighters as $f) {
    foreach ($targets as $t) {
        $f->fight($t);
    }
}
