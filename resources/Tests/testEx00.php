<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\POO\Ex00\Tyrion;

$tyrion = new Tyrion();

echo "{$tyrion->getSize()}\n";
echo "{$tyrion->getHouseMotto()}\n";
