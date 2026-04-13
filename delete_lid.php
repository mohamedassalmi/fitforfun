<?php
/*
=========================================================
DELETE_LID.PHP
=========================================================
*/

session_start();

// UNHAPPY
if(!isset($_GET['id'])){
    echo "Fout: geen ID meegegeven.";
    exit;
}

$id = $_GET['id'];

if(!isset($_SESSION['leden'][$id])){
    echo "Fout: lid bestaat niet.";
    exit;
}

// HAPPY
unset($_SESSION['leden'][$id]);
$_SESSION['leden'] = array_values($_SESSION['leden']);

header("Location: read_leden.php");
exit; 

cccccccccccccccccc