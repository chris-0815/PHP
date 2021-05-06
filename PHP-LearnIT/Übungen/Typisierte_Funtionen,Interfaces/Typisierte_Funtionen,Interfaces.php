<?php

function autoload($className)
{
    if (file_exists("./src/{className}.php")) {
        require "./src/{className}.php";
    }
}
spl_autoload_register("autoload");

function drive(DriveInterface $obj)
{
    return $obj->drive("Berlin");
}

$wv = new SuperCar(150);
var_dump(drive($wv));

?>