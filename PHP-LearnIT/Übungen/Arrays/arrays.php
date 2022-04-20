<?php

$saetze = [
    14 => "Obst",
    44 => "Kaese",
    11 => "Milch",
];

echo nl2br("asort\n");
asort($saetze);
var_dump($saetze);

echo nl2br("ksort\n");
ksort($saetze);
var_dump($saetze);

echo nl2br("usort\n");
usort($saetze, function($a, $b) {
    var_dump($a);
    var_dump($b);
});
?>