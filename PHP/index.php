<?php

require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("uberVan.php");
require_once("account.php");

// $car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
// $car->printDataCar();

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

// $uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
// $uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6)
$uberVan->printDataCar();

?>