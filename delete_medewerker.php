<?php
/*
=========================================================
DELETE_MEDEWERKER.PHP
=========================================================
*/

session_start();

// UNHAPPY
if(!isset($_GET['id'])){
    echo "Fout: geen ID meegegeven.";
    exit;
}

$id = $_GET['id'];

if(!isset($_SESSION['medewerkers'][$id])){
    echo "Fout: medewerker bestaat niet.";
    exit;
}

// HAPPY
unset($_SESSION['medewerkers'][$id]);
$_SESSION['medewerkers'] = array_values($_SESSION['medewerkers']);

header("Location: read_medewerker.php");
exit;