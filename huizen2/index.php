<?php
require __DIR__ . '/vendor/autoload.php';


use App\Room;
use App\House;

$room1 = new Room(10.5, 3.2, 8.0);
$room2 = new Room(13.7, 20.2, 24.3);
$room3 = new Room(11.2, 4.4, 10.0);

$house = new House([$room1, $room2, $room3]);

echo $house->getHouse();

