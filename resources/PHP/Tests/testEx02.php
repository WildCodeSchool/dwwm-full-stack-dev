<?php

use App\Resources\PHP\Classes\Targaryen\Daenerys;
use App\Resources\PHP\Classes\Targaryen\Viserys;

require __DIR__ . '/../../../vendor/autoload.php';

$viserys = new Viserys();
$daenerys = new Daenerys();

echo "Viserys {$viserys->getBurned()}\n";
echo "Daenerys {$daenerys->getBurned()}\n";
