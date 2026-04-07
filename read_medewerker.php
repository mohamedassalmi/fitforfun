<?php
/*
=========================================================
READ_MEDEWERKER.PHP
=========================================================
*/

session_start();

$medewerkers = $_SESSION['medewerkers'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Medewerkers Overzicht</h1>

<a href="create_medewerker.php">Nieuwe medewerker</a><br><br>

<?php
// UNHAPPY
if(empty($medewerkers)){
    echo "Geen medewerkers gevonden.";
}

// HAPPY
else{
    foreach($medewerkers as $i => $m){
        echo "<div class='les'>";
        echo $m['naam'];
        echo " <a href='delete_medewerker.php?id=$i'>Verwijderen</a>";
        echo "</div><br>";
    }
}
?>

</body>
</html>