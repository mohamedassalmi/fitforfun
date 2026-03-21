<?php
/*
=========================================================
STORE_RESERVERING.PHP

Doel:
Reservering opslaan.

Werking:
- Data ophalen via POST
- Opslaan in session
- Datum automatisch toevoegen
=========================================================
*/

session_start();

/*
Session array aanmaken indien nodig
*/
if(!isset($_SESSION['reserveringen'])){
    $_SESSION['reserveringen'] = [];
}

/*
Nieuwe reservering
*/
$reservering = [

    "naam" => $_POST['naam'],
    "les" => $_POST['les'],
    "datum" => date("Y-m-d")

];

/*
Toevoegen aan lijst
*/
$_SESSION['reserveringen'][] = $reservering;

/*
Redirect
*/
header("Location: index.php");
exit;
?>      