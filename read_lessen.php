<?php

/*
Session starten om opgeslagen lessen te lezen
*/

session_start();

/*
Als er nog geen lessen bestaan maken we een lege array
*/

$lessen = [];

if(isset($_SESSION['lessen'])){

$lessen = $_SESSION['lessen'];

}

?>

<h1>Overzicht van Lessen</h1>

<?php

/*
UNHAPPY SCENARIO
Als er nog geen lessen zijn
*/

if(empty($lessen)){

echo "Er zijn nog geen lessen toegevoegd.";

}

/*
HAPPY SCENARIO
Lessen tonen met een foreach loop
*/

else{

foreach($lessen as $index => $les){

echo $les['lesnaam'] . " - ";
echo $les['trainer'] . " - ";
echo $les['datum'] . " - ";
echo $les['tijd'];

/*
Links voor UPDATE en DELETE
*/

echo " <a href='update_les.php?id=$index'>Bewerken</a>";
echo " <a href='delete_les.php?id=$index'>Verwijderen</a>";

echo "<br>";

}

}

?>
