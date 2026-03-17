<?php

/*
Session starten
*/

session_start();

/*
ID ophalen
*/

$id = $_POST['id'];

/*
Lesgegevens opnieuw opslaan
*/

$_SESSION['lessen'][$id] = [

"lesnaam" => $_POST['lesnaam'],
"trainer" => $_POST['trainer'],
"datum" => $_POST['datum'],
"tijd" => $_POST['tijd']

];

echo "Les succesvol aangepast.";

echo "<br><a href='read_lessen.php'>Terug naar overzicht</a>";

?>
