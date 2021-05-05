<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>na freilich</title>
</head>

<body>

<?php


$diezahl = 42;
$satz1 = "Chrissi HALLO HALLO HALLOO";
$leerer_string = "";
$boolean_wert1 = true;
$boolean_wert2 = false;
$boolean_wert3 = true AND true;
$boolean_wert4 = false && false;
$boolean_wert5 = true OR true;
$boolean_wert6 = false || false;
$name = "Erik Heisternicht";
$groesse = 1.96;
$gewicht = 89;
$bmi_index = $gewicht/($groesse*$groesse);
echo $bmi_index; 
echo "ich bin hier die programm.php... und du wiegst ".$gewicht."kg. Dein BMI liegt bei ".$bmi_index." also alles im grünen bereich.";
echo 'Hallo, {§gewicht} <br> da hast deinen zeilenumsprung';
echo "Hallo, <br> {$gewicht}";
echo "<br>";
echo strlen($name);
var_dump($name);
var_dump($groesse);
var_dump($boolean_wert1);
echo "<br>";
var_dump(empty($leerer_string));
echo "<p>Ja servus du Schlaumeier<\p>";

if ($boolean_wert1) {
	echo "Die Variable boolean_wert1 ist True";
} else {
	echo "Die Variable boolean_wert1 ist False";
}
echo "<br>";

if ($gewicht > 50) {
		echo "Die Variable gewicht ist grösser als 50";
} else {
		echo "Die Variable gewicht ist nicht grösser als 50";
}
echo "<br>";

if (!empty($leerer_string)) {
	echo "Teil 1";
} else {
	echo "Teil 2";
}

echo str_replace("HALLO", "Welcome", $satz1);


/* while ($diezahl <= 10) {
	# code...
} */


for ($x = 42; $x > 0; $x --) {
	var_dump($x);
}

$ergebnis = 0;

for ($y = 0; $y <= 100; $y++) {
	$ergebnis+=$y;
	echo($ergebnis);
	echo"<br>";
}


?>

    
    
<?php
  /* Verbindung aufnehmen */
  $con = mysqli_connect("","root");
  /* Datenbank auswählen */
  mysqli_select_db($con, "NewsPool");
  /* SQL-Abfrage ausführen */
  $res = mysqli_query($con, "select * from Newsblog");
  /* Anzahl Datensätze ermitteln und ausgeben */
  $num = mysqli_num_rows($res);
  echo "$num Datensätze gefunden<br />";
  /* Datensätze aus Ergebnis ermitteln, */
  /* in Array speichern und ausgeben    */
  while ($dsatz = mysqli_fetch_assoc($res))
  {
    echo $dsatz;
      var_dump($dsatz);
  }
  /* Verbindung schließen */
  mysqli_close($con);
?>


</body>

</html>
