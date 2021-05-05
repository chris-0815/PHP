<?php

$produkte = array(
    "Obst" => array(
        "Birne",
        "Banane",
        "Apfel"
    )
    );

    echo "<ul>";
    foreach ($produkte AS $category => $items) {
        echo "<li>{$categroy}<ul>";
        foreach ($items AS $item) {
            echo "</li>{$item}</li>";
        }
        echo "</ul></li>";
    }
    
    echo "</ul>";