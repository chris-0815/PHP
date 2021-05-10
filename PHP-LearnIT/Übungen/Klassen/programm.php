<?php

function autoload($className)
{
    if (file_exists("./src/{$className}.php")) {
        require "./src/{$className}.php";
    }
}

spl_autoload_register("autoload");

$h = new BlogPost();
var_dump($h);
