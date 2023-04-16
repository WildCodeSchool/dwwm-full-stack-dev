<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\POO\Ex05\NightsWatch;
use App\Resources\Classes\NightsWatch\MaesterAemon;
use App\Resources\Classes\NightsWatch\SamwellTarly;
use App\Resources\Classes\Stark\JonSnow;

$jon = new JonSnow();
$aemon = new MaesterAemon();
$sam = new SamwellTarly();
$nw = new NightsWatch();

$nw->recruit($jon);
$nw->recruit($aemon);
$nw->recruit($sam);

$nw->fight();
