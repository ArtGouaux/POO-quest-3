<?php

require 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';

$lamborghini = new Car ('jaune', 2, 'gasoil');
$tornado = new Bicycle('rose', 1);

$national20 = new MotorWay(4, 130);
$national20->addVehicle($lamborghini);
echo '<br>';
$national20->addVehicle($tornado);
echo '<br>';

$street = new ResidentialWay(2, 50);
$street->addVehicle($lamborghini);
echo '<br>';
$street->addVehicle($tornado);
echo '<br>';

$alley = new PedestrianWay(1, 10);
$alley->addVehicle($lamborghini);
echo '<br>';
$alley->addVehicle($tornado);
echo '<br>';


