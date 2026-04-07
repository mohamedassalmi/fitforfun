<?php
/*
=========================================================
STORE_LID.PHP

Doel:
Opslaan van een nieuw lid.

Werking:
- Data ophalen via POST
- Validatie uitvoeren
- Opslaan in session
=========================================================
*/

session_start();

/*
Session initialiseren
*/
if(!isset($_SESSION['leden'])){
    $_SESSION['leden'] = [];
}

/*
Data ophalen + opschonen
*/
$naam = isset($_POST['naam']) ? trim($_POST['naam']) : "";

/*
UNHAPPY SCENARIO
*/
if($naam === ""){
    echo "Fout: naam is verplicht.";
    exit;
}

/*
HAPPY SCENARIO
*/
$_SESSION['leden'][] = [
    "naam" => $naam
];

/*
Redirect
*/
header("Location: read_leden.php");
exit;