<?php
session_start();

// UNHAPPY
if(!isset($_GET['id'])){
    echo "Fout: geen ID meegegeven.";
    exit;
}

$id = $_GET['id'];

if(!isset($_SESSION['lessen'][$id])){
    echo "Fout: les bestaat niet.";
    exit;
}

// HAPPY
unset($_SESSION['lessen'][$id]);
$_SESSION['lessen'] = array_values($_SESSION['lessen']);

header("Location: read_lessen.php");
exit;