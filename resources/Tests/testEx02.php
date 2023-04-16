<?php

use App\Resources\Classes\Targaryen\Daenerys;
use App\Resources\Classes\Targaryen\Viserys;

require __DIR__ . '/../../vendor/autoload.php';

$viserys = new Viserys();
$daenerys = new Daenerys();

echo "Viserys {$viserys->getBurned()}\n";
echo "Daenerys {$daenerys->getBurned()}\n";
