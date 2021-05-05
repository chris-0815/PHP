<?php

$warenkorb = array (
    "Apfel",
    "Birne",
    "Banane"
);


////////////////////////////////////////////

echo "<ul>";

$anzahl = count($warenkorb);
for ($x = 0; $x < $anzahl; $x++) {
    echo "<li>";
    echo $warenkorb[$x];
    echo "</li>";
}

echo "</ul>";


////////////////////////////////////////////


echo "<ul>";

foreach ($warenkorb AS $key => $produkt) {
    echo "<li>";
    echo $key;
    echo ": ";
    echo $produkt;
    echo "</li>";
}

echo "</ul>";

?>