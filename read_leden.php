<?php
/*
=========================================================
READ_LEDEN.PHP
=========================================================
*/

session_start();

$leden = $_SESSION['leden'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Leden Overzicht</h1>

<a href="create_lid.php">Nieuw lid</a><br><br>

<?php
// UNHAPPY
if(empty($leden)){
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