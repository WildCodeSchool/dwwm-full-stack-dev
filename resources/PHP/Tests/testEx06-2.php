<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\PHP\POO\Ex06\UnholyFactory;
use App\Resources\PHP\Classes\CrippledSoldier;

$uf = new UnholyFactory();
$uf->absorb(new CrippledSoldier());

$requested_fighters = [
    'crippled soldier',
    'crippled soldier',
    'crippled soldier',
    'crippled soldier',
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
