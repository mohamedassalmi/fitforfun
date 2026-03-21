<?php
/*
=========================================================
STORE_LES.PHP

Dit bestand verwerkt het formulier van create_les.php

Taken:
- Data ophalen via POST
- Validatie uitvoeren
- Opslaan in session
- Redirect naar overzicht
=========================================================
*/

session_start();

/*
Data ophalen
*/
$lesnaam = $_POST['lesnaam'];
$trainer = $_POST['trainer'];
$datum = $_POST['datum'];
$tijd = $_POST['tijd'];

/*
UNHAPPY SCENARIO
Controle of velden leeg zijn
*/
if($lesnaam == "" || $trainer == "" || $datum == "" || $tijd == ""){
    echo "Fout: alle velden moeten ingevuld worden.";
    exit;
}

/*
SESSION initialiseren indien nodig
*/
if(!isset($_SESSION['lessen'])){
    $_SESSION['lessen'] = [];
}

/*
Les opslaan in array
*/
$_SESSION['lessen'][] = [
    "lesnaam" => $lesnaam,
    "trainer" => $trainer,
    "datum" => $datum,
    "tijd" => $tijd
];

/*
Redirect naar overzicht
*/
header("Location: read_lessen.php");
exit;
?>