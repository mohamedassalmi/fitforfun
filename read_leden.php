<?php
/*
=========================================================
READ_LEDEN.PHP
=========================================================
*/

session_start();

/*
Session check
*/
if(!isset($_SESSION['leden'])){
    $_SESSION['leden'] = [];
}

$leden = $_SESSION['leden'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Leden Overzicht</h1>

<a href="create_lid.php">Nieuw lid</a>
<br><br>

<?php
// UNHAPPY
if(count($leden) === 0){
    echo "Geen leden gevonden.";
}

// HAPPY
else{
    foreach($leden as $i => $lid){

        echo "<div class='les'>";

        echo $lid['naam'];

        echo " <a href='delete_lid.php?id=$i'>Verwijderen</a>";

        echo "</div><br>";
    }
}
?>

</body>
</html>