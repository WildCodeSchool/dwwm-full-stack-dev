<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Resources\Classes\Greyjoy\Euron;

$euron = new Euron();
echo "{$euron->familyMotto}\n";
