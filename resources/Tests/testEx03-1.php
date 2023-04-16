<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Resources\Classes\Martell\HouseMartell;
use App\Resources\Classes\Stark\HouseStark;

$houses = [new HouseStark(), new HouseMartell()];

foreach ($houses as $house) {
    $house->introduce();
}
