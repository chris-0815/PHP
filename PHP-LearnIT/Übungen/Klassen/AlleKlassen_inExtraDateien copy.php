<?php

require "src/classes/Car.php";
require "src/classes/SuperCar.php";


$wv = new Car(150);
var_dump($wv->drive("Berlin"));
var_dump($wv);

$mbw = new SuperCar(350);
var_dump($mbw->drive("Himmelspforte"));

?>