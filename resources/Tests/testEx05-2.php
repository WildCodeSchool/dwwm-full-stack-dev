<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\POO\Ex05\NightsWatch;
use App\Resources\Classes\Varys;

$varys = new Varys();
$nw = new NightsWatch();

$nw->recruit($varys);

$nw->fight();
