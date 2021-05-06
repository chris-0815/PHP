<?php

$produkte = array(          //<-- Alte ausführliche Schreibweise
    'Elektronik' => array(
        'Computer',
        'Notebook',
        'Digitalkamera',
    ),
    'Obst' => array(        //<-- Alte ausführliche Schreibweise
        "Apfel",
        "Birne",
        "Banane"
    )
);

    var_dump($produkte);



$produkte = [               //<-- neue kurze Schreibweise
    'Elektronik' => [       //<-- neue kurze Schreibweise
        'Computer',
        'Notebook',
        'Digitalkamera',
    ],                      //<-- neue kurze Schreibweise
    'Obst' => array(        //<-- Alte ausführliche Schreibweise, auch beide kombinieren ist möglich. 
        "Apfel",
        "Birne",
        "Banane"
    )
    ];

    var_dump($produkte);

?>
