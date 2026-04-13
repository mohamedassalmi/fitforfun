<?php
/*
=========================================================
READ_LESSEN.PHP
=========================================================
*/

session_start();

/*
Session check
*/
if(!isset($_SESSION['lessen'])){
    $_SESSION['lessen'] = [];
}

$lessen = $_SESSION['lessen'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>

<body>

<h1>Overzicht van Lessen</h1>

<input type="text" id="zoek" onkeyup="filterLessen()" placeholder="Zoek les...">
<br><br>

<?php
// UNHAPPY
if(count($lessen) === 0){
    echo "Er zijn nog geen lessen.";
}

// HAPPY
else{
    foreach($lessen as $i => $les){

        echo "<div class='les'>";

        echo "<strong>".$les['lesnaam']."</strong> - ";
        echo $les['trainer']." - ";
        echo $les['datum']." - ";
        echo $les['tijd'];

        echo " <a href='update_les.php?id=$i'>Bewerken</a>";
        echo " <a href='delete_les.php?id=$i' onclick='return confirmDelete()'>Verwijderen</a>";

        echo "</div><br>";
    }
}
?>

</body>
</html>