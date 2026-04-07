<?php
session_start();

// UNHAPPY
if(!isset($_POST['id'])){
    echo "Fout: geen ID ontvangen.";
    exit;
}

$id = $_POST['id'];

if(!isset($_SESSION['lessen'][$id])){
    echo "Fout: les bestaat niet.";
    exit;
}

if($_POST['lesnaam'] == "" || $_POST['trainer'] == ""){
    echo "Fout: velden zijn verplicht.";
    exit;
}

// HAPPY
$_SESSION['lessen'][$id] = [
    "lesnaam" => $_POST['lesnaam'],
    "trainer" => $_POST['trainer'],
    "datum" => $_POST['datum'],
    "tijd" => $_POST['tijd']
];

header("Location: read_lessen.php");
exit;