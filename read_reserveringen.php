<?php
/*
=========================================================
READ_RESERVERINGEN.PHP
=========================================================
*/

session_start();

/*
Session check
*/
if(!isset($_SESSION['reserveringen'])){
    $_SESSION['reserveringen'] = [];
}

$reserveringen = $_SESSION['reserveringen'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Overzicht Reserveringen</h1>

<?php
// UNHAPPY
if(count($reserveringen) === 0){
    echo "Geen reserveringen gevonden.";
}

// HAPPY
else{
    foreach($reserveringen as $i => $r){

        echo "<div class='les'>";

        echo "<strong>".$r['naam']."</strong> - ";
        echo $r['les']." - ";
        echo $r['datum'];

        echo " <a href='delete_reservering.php?id=$i'>Verwijderen</a>";

        echo "</div><br>";
    }
}
?>

</body>
</html>