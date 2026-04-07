<?php
/*
=========================================================
READ_RESERVERINGEN.PHP

Doel:
Overzicht tonen van alle reserveringen.

Functionaliteit:
- Alle reserveringen tonen
- Mogelijkheid om te verwijderen
=========================================================
*/

session_start();

/*
Reserveringen ophalen uit session
*/
$reserveringen = $_SESSION['reserveringen'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Overzicht Reserveringen</h1>

<?php
/*
UNHAPPY SCENARIO
*/
if(empty($reserveringen)){
    echo "Geen reserveringen.";
}

/*
HAPPY SCENARIO
*/
else{
    foreach($reserveringen as $i => $r){

        echo "<div class='les'>";

        echo "<strong>".$r['naam']."</strong> - ";
        echo $r['les']." - ";
        echo $r['datum'];

        /*
        Actie: verwijderen
        */
        echo " <a href='delete_reservering.php?id=$i'>Verwijderen</a>";

        echo "</div><br>";
    }
}
?>

</body>
</html>