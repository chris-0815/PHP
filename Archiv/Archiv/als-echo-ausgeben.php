<?php

$products = [
  [
    'title' => 'Orange',
    'desc' => 'Eine Orange ist sehr gesund!'
  ],
  [
    'title' => 'Computer',
    'desc' => 'Damit kann man Programmieren lernen!'
  ],
]

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="start.php">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="start.php">Home</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <br />
    <br />
    <br />

    <div class="container">
      <?php
        foreach($products AS $product) {
          $productTitle = $product["title"];
          $productDesc = $product["desc"];

          // Wichtig: jedes <div>, welches geöffnet wird,
          // sollte auch in dieser foreach-schleife wieder geschlossen
          // werden.
          // Anregung: Probier mal aus, was passiert, wenn ein html-element
          // nicht korrekt geschlossen wird. Und insbesondere, wenn ein
          // html-element nicht geschlossen wurde, wie "zerschießt" es die
          // Seite, wenn $products aus 3, 4, ..., 10 Produkten besteht?
          echo "<div class='panel panel-default'>";
          echo "<div class='panel-heading'>";

          // oder: echo "<h3 class='panel-title'>{$productTitle}</h3>";
          // oder: echo "<h3 class='panel-title'>{$product["title"]}</h3>";
          echo "<h3 class='panel-title'>$productTitle</h3>";

          echo "</div>";
          echo "<div class='panel-body'>$productDesc</div>";
          echo "</div>";
        }
       ?>
      <pre><?php var_dump($products); ?></pre>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
