<?php

// require "src/Car.php";
// require "src/SuperCar.php";

function autoload($className) 
{

    /* if ($className == "SuperCar") {          // so könnte man es bei Bedarf laden lassen. Allerdings 
        require "./src/SuperCar.php";           // sehr umständlich diese Methode
    }
    if ($className == "Car") {
        require "./src/Car.php";
    } */
    if (file_exists("./src/{className}.php")) {
    require "./src/{$className}.php";
    }
}
spl_autoload_register("autoload");

$wv = new SuperCar(150);
var_dump($wv->drive("Berlin"));


?>