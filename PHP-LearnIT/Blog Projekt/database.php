<?php 

$pdo = new PDO(
    'mysql:host=localhost;dbname=blog',
    'root',
    ''
);

function fetch_posts() 
{
    global $pdo;
    return $pdo->query("SELECT * FROM `posts`");
}

?>