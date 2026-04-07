<?php
/*
=========================================================
STORE_MEDEWERKER.PHP

Doel:
Opslaan van een medewerker.
=========================================================
*/

session_start();

/*
Session initialiseren
*/
if(!isset($_SESSION['medewerkers'])){
    $_SESSION['medewerkers'] = [];
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
$_SESSION['medewerkers'][] = [
    "naam" => $naam
];

/*
Redirect
*/
header("Location: read_medewerker.php");
exit;