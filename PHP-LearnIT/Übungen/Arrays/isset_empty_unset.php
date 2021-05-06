<?php

$staedte = array(
    "Berlin" => 2000000,
    "Helsinki" => 10000000,
    "London" => 30000000
);

var_dump(isset($staedte["Berlin"]));        // isset fragt ab ob dieses Element vorhanden ist und ob es nicht null ist
var_dump(isset($staedte["Budapest"]));

var_dump(empty($staedte["Berlin"]));        // empty fragt das Array an einer definierten Stelle ab ob es leer ist

unset($staedte["Berlin"]);                  // unset setzt den angesprochenen Wert auf 0 

var_dump($staedte);

?>
