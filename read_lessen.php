<?php
/*
=========================================================
READ_LESSEN.PHP

Toont alle lessen.

Functionaliteit:
- Overzicht tonen
- Zoeken/filteren
- Bewerken
- Verwijderen
=========================================================
*/

session_start();

/*
Lessen ophalen uit session
*/
$lessen = $_SESSION['lessen'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>

<body>

<h1>Overzicht van Lessen</h1>

<!-- Zoekfunctie -->
<input type="text" id="zoek" onkeyup="filterLessen()" placeholder="Zoek les...">
<br><br>

<?php

/*
UNHAPPY SCENARIO
*/
if(empty($lessen)){
    echo "Er zijn nog geen lessen.";
}

/*
HAPPY SCENARIO
*/
else{

    foreach($lessen as $i => $les){

        echo "<div class='les'>";

        echo "<strong>".$les['lesnaam']."</strong> - ";
        echo $les['trainer']." - ";
        echo $les['datum']." - ";
        echo $les['tijd'];

        /*
        Acties
        */
        echo " <a href='update_les.php?id=$i'>Bewerken</a>";
        echo " <a href='delete_les.php?id=$i' onclick='return confirmDelete()'>Verwijderen</a>";

        echo "</div><br>";
    }
}
?>

</body>
</html>