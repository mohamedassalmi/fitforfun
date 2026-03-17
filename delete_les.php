<?php

/*
Session starten
*/

session_start();

/*
ID ophalen van de les die verwijderd moet worden
*/

$id = $_GET['id'];

/*
Les verwijderen uit de array
*/

unset($_SESSION['lessen'][$id]);

echo "Les succesvol verwijderd.";

echo "<br><a href='read_lessen.php'>Terug naar overzicht</a>";

?>

