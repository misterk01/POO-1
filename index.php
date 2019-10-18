<?php
require_once 'Bicycle.php';
$bike = new Bicycle('yellow');

echo $bike->forward();

echo $bike->brake();


require_once 'Car.php';
$car = new Car('black', 'fuel', 8);
var_dump($car);

$car2 = new Car ('red', 'diesel', 5);

echo $car2->forward();
echo $car2->brake();
var_dump($car2);
echo $car2->start();
var_dump($car2);
