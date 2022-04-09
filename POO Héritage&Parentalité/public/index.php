<?php
//Appel
require_once 'Bicycle.php';
require_once "Car.php";
require_once "Truck.php";
require_once "Skateboard.php";
require_once "MotorWay.php";
require_once "ResidentialWay.php";
require_once "PedestrianWay.php";
//Vehicles
$car = new Car("blue", 5, "Diesel");
$truck = new Truck("purple", 3, "fuel", 30);
$bike = new Bicycle('blue', 1);
$skate = new Skateboard("yellow", 4);
//Routes
$motor = new MotorWay;
$residential = new ResidentialWay;
$pedestrian = new PedestrianWay;
//++++ véhicles
$residential->addVehicle($car);
$residential->addVehicle($bike);
$residential->addVehicle($skate);
$motor->addVehicle($bike);
$motor->addVehicle($car);
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($bike);
//array
var_dump($residential->getCurrentVehicles());
var_dump($motor->getCurrentVehicles());
var_dump($pedestrian->getCurrentVehicles());

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo '<br> Vitesse vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse vélo : ' . $bicycle->getcurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br>';

$cars = new Cars('green', 4, 'electric');
echo $cars->forward();
echo '<br> Vitesse voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake(). '<br>';

$cargo = new Truck('white', 3, 'fuel', 34000);
echo  $cargo->forward();
echo '<br> Vitesse camion : ' . $cargo->getCurrentSpeed() . ' km/h' . '<br>';
echo $cargo->brake();
echo '<br> Vitesse camion : ' . $cargo->getCurrentSpeed() . ' km/h' . '<br>';
echo $cargo->brake();
echo '<br> Chargement camion: '. $cargo->getLoading(). ' litres' . '<br>';
echo $cargo->loading(). '<br>';




 


