<?php
/*
=========================================================
UPDATE_LES.PHP

Doel:
Formulier tonen om een bestaande les aan te passen.

Werking:
- ID ophalen via GET
- Les ophalen uit session
- Formulier vullen met bestaande data
=========================================================
*/

session_start();

/*
ID ophalen
*/
$id = $_GET['id'];

/*
Les ophalen
*/
$les = $_SESSION['lessen'][$id];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>

<body>

<h1>Les aanpassen</h1>

<form action="save_update.php" method="POST">

<!-- Hidden input voor ID -->
<input type="hidden" name="id" value="<?php echo $id; ?>">

<label>Lesnaam</label>
<input type="text" name="lesnaam" value="<?php echo $les['lesnaam']; ?>">
<br><br>

<label>Trainer</label>
<input type="text" name="trainer" value="<?php echo $les['trainer']; ?>">
<br><br>

<label>Datum</label>
<input type="date" name="datum" value="<?php echo $les['datum']; ?>">
<br><br>

<label>Tijd</label>
<input type="time" name="tijd" value="<?php echo $les['tijd']; ?>">
<br><br>

<button type="submit">Opslaan</button>

</form>

</body>
</html>