<?php

$obst = "Ananas";

$warenkorb = array (
    "Banane", 
    "Birne",
    "Apfel",
    "Kirschen",
    123,
    true,
    "false",
    $obst
);

$index = 0;

echo count($warenkorb);
var_dump($warenkorb[$index]);



// elemente hinzufügen

$warenkorb[] = "Ananas";    // element wird durch diese Methode am Ende des Arrays eingefügt
array_unshift($warenkorb,"kiwi");   // element wird durch diese Methode an die erste Stelle des Arrays eingefügt
var_dump(array_shift($warenkorb)); // gibt das erste element des Arrays aus und entfernt dieses aus dem Array
var_dump(array_pop($warenkorb));    // gibt das letzte element des Arrays aus und entfernt dieses aus dem Array

var_dump($warenkorb);

?>