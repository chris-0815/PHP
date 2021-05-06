<?php

$staedte = array(
    "Berlin" => 2000000,
    "Helsinki" => 10000000,
    "London" => 30000000
);

$staedte["Muenchen"] = 1500000;
$staedte["Berlin"] = 2000010;

var_dump($staedte);

echo "<ul>";

foreach ($staedte AS $key => $value) {
    echo "<li>{$key}: {$value}</li>";
}

echo"</ul>";

?>