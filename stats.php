<?php
/*
=========================================================
STATS.PHP

Doel:
Overzicht tonen van aantal leden per periode.

Werking:
- Alle reserveringen ophalen
- Groeperen per maand
- Tellen hoeveel leden per maand
=========================================================
*/

session_start();

/*
Lege array voor telling
*/
$telling = [];

/*
Loop door reserveringen
*/
foreach($_SESSION['reserveringen'] ?? [] as $r){

    /*
    Maand bepalen (YYYY-MM)
    */
    $maand = date("Y-m", strtotime($r['datum']));

    /*
    Als maand nog niet bestaat → maak aan
    */
    if(!isset($telling[$maand])){
        $telling[$maand] = 0;
    }

    /*
    Teller verhogen
    */
    $telling[$maand]++;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Leden per periode</h1>

<?php

/*
Resultaat tonen
*/
if(empty($telling)){
    echo "Geen data beschikbaar.";
}else{

    foreach($telling as $maand => $aantal){

        echo "<div class='les'>";
        echo "<strong>$maand</strong> : $aantal leden";
        echo "</div>";      

    }

}
?>

</body>
</html>