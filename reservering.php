<?php
/*
=========================================================
RESERVERING.PHP

Doel:
Nieuwe reservering maken.

Werking:
- Gebruiker voert naam in
- Gebruiker kiest een les
- Data wordt verstuurd naar store_reservering.php
=========================================================
*/

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Nieuwe Reservering</h1>

<form action="store_reservering.php" method="POST">

<label>Naam lid</label>
<input type="text" name="naam">
<br><br>

<label>Kies les</label>
<select name="les">

<?php
/*
Lessen ophalen en tonen in dropdown
*/
foreach($_SESSION['lessen'] ?? [] as $les){

    echo "<option>".$les['lesnaam']."</option>";

}
?>

</select>

<br><br>

<button type="submit">Reservering opslaan</button>

</form>

</body>
</html>