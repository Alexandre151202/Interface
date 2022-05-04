<?php

require_once 'Car.php';
require once 'Speedometer.php';

$twingo = new Car('red', 4, 'low');

try {
    $twingo->start();
} catch(Exception $e){
    $twingo->changeParkBrake();
} finally {
    echo $twingo->start();
}

echo $twingo->forward() . '<br>';
echo $twingo->brake() . '<br>';

echo Speedometer::convertKmToMiles(10) . PHP_EOL;
echo Speedometer::convertMilesToKm(6.21) . PHP_EOL;
