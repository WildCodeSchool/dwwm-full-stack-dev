<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\Resources\PHP\Classes\Martell\HouseMartell;
use App\Resources\PHP\Classes\Stark\HouseStark;

$houses = [new HouseStark(), new HouseMartell()];

foreach ($houses as $house) {
    $house->introduce();
}
