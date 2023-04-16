<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\POO\Ex00\Tyrion;
use App\POO\Ex04\Jaime;
use App\Resources\Classes\Lannister\Cersei;
use App\Resources\Classes\Stark\Sansa;

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
