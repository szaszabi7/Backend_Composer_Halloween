<?php

require '../vendor/autoload.php';

use Petrik14s\SzalaiSzabolcs\Halloween\Models\Esemeny;
use Petrik14s\SzalaiSzabolcs\Halloween\Models\Lako;


$lako1 = new Lako("Feri");
$lako2 = new Lako("Józsi");
$lako3 = new Lako("Ernő");
$lako4 = new Lako("Gyuri");

$lakok = [$lako1, $lako2, $lako3, $lako4];

$datum1 = new DateTime();

$esemeny1 = new Esemeny("Halloween1", $lako1, $lakok, $datum1);
$esemeny2 = new Esemeny("Halloween2", $lako4, $lakok, $datum1);

$esemenyek = [$esemeny1, $esemeny2];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween</title>
</head>
<body>
    <?php 
    
        foreach ($esemenyek as $e) {
            echo "<h2>";
            echo $e -> getNev();
            echo "</h2>";
            echo "<p>";
            echo "Szervező: " . $e -> getSzervezo() -> getNev();
            echo "</p>";
            echo "<p>Résztvevők: <ul>";
            foreach ($lakok as $l) {
                echo "<li>";
                echo $l -> getNev();
                echo "</li>";
            }
            echo "</ul></p>";
            echo "<p>";
            echo "Esemény dátuma: " . $e -> getIdo() -> format('Y-m-d');
            echo "</p>";
        }

    ?>
</body>
</html>