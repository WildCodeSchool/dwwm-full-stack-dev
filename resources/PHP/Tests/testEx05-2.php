<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\PHP\POO\Ex05\NightsWatch;
use App\Resources\PHP\Classes\Varys;

$varys = new Varys();
$nw = new NightsWatch();

$nw->recruit($varys);

$nw->fight();
