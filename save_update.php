<?php
/*
=========================================================
SAVE_UPDATE.PHP

Doel:
Opslaan van aangepaste lesgegevens.

Werking:
- Data ophalen via POST
- Oude les overschrijven
- Redirect naar overzicht
=========================================================
*/

session_start();

/*
ID ophalen
*/
$id = $_POST['id'];

/*
Nieuwe data opslaan
*/
$_SESSION['lessen'][$id] = [

    "lesnaam" => $_POST['lesnaam'],
    "trainer" => $_POST['trainer'],
    "datum" => $_POST['datum'],
    "tijd" => $_POST['tijd']

];

/*
Redirect
*/
header("Location: read_lessen.php");
exit;
?>