<?php

use App\PHP\POO\Ex00\Tyrion;
use App\PHP\POO\Ex04\Jaime;
use App\Resources\PHP\Classes\Lannister\Cersei;
use App\Resources\PHP\Classes\Stark\Sansa;

require __DIR__ . '/../../../vendor/autoload.php';

$jaime = new Jaime(false);
$cercei = new Cersei(false);
$tyrion = new Tyrion(false);
$sansa = new Sansa();

$jaime->sleepWith($tyrion);
$jaime->sleepWith($sansa);
$jaime->sleepWith($cercei);

$tyrion->sleepWith($jaime);
$tyrion->sleepWith($sansa);
$tyrion->sleepWith($cercei);
