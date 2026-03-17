<?php

/*
Session starten
*/

session_start();

/*
ID ophalen via GET
*/

$id = $_GET['id'];

/*
Specifieke les ophalen
*/

$les = $_SESSION['lessen'][$id];

?>

<h1>Les aanpassen</h1>

<!--
Formulier voor het aanpassen van een les
-->

<form action="save_update.php" method="POST">

<!--
Hidden input om het ID van de les mee te sturen
-->

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
