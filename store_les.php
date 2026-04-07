<?php
/*
=========================================================
STORE_LES.PHP

Doel:
Opslaan van een nieuwe les.

Werking:
- Data ophalen via POST
- Validatie uitvoeren
- Opslaan in session
=========================================================
*/

session_start();

/*
Data ophalen + opschonen
*/
$lesnaam = isset($_POST['lesnaam']) ? trim($_POST['lesnaam']) : "";
$trainer = isset($_POST['trainer']) ? trim($_POST['trainer']) : "";
$datum = isset($_POST['datum']) ? $_POST['datum'] : "";
$tijd = isset($_POST['tijd']) ? $_POST['tijd'] : "";

/*
UNHAPPY SCENARIO
*/
if($lesnaam === "" || $trainer === "" || $datum === "" || $tijd === ""){
    echo "Fout: alle velden zijn verplicht.";
    exit;
}

/*
Session initialiseren
*/
if(!isset($_SESSION['lessen'])){
    $_SESSION['lessen'] = [];
}

/*
HAPPY SCENARIO
*/
$_SESSION['lessen'][] = [
    "lesnaam" => $lesnaam,
    "trainer" => $trainer,
    "datum" => $datum,
    "tijd" => $tijd
];

/*
Redirect
*/
header("Location: read_lessen.php");
exit;