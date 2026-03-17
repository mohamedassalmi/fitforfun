<?php

/*
Session starten zodat we gegevens tijdelijk
kunnen opslaan zonder database
*/

session_start();

/*
Formuliergegevens ophalen via POST
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

}

/*
HAPPY SCENARIO
Les toevoegen aan de array
*/

else{

/*
Als de array nog niet bestaat maken we hem aan
*/

if(!isset($_SESSION['lessen'])){

$_SESSION['lessen'] = [];

}

/*
Nieuwe les opslaan in een associative array
*/

$les = [

"lesnaam" => $lesnaam,
"trainer" => $trainer,
"datum" => $datum,
"tijd" => $tijd

];

/*
Les toevoegen aan de lijst met lessen
*/

$_SESSION['lessen'][] = $les;

echo "Les succesvol toegevoegd!";

/*
Link naar overzicht pagina
*/

echo "<br><a href='read_lessen.php'>Bekijk lessen overzicht</a>";

}

?>
