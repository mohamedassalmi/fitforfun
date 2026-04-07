<?php
/*
=========================================================
DELETE_RESERVERING.PHP
=========================================================
*/

session_start();

// UNHAPPY
if(!isset($_GET['id'])){
    echo "Fout: geen ID meegegeven.";
    exit;
}

$id = $_GET['id'];

if(!isset($_SESSION['reserveringen'][$id])){
    echo "Fout: reservering bestaat niet.";
    exit;
}

// HAPPY
unset($_SESSION['reserveringen'][$id]);
$_SESSION['reserveringen'] = array_values($_SESSION['reserveringen']);

header("Location: read_reserveringen.php");
exit;