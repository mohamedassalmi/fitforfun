<?php
/*
=========================================================
CREATE_LES.PHP

Pagina voor het aanmaken van een nieuwe les.

De gebruiker vult hier:
- Lesnaam
- Trainer
- Datum
- Tijd

De data wordt verzonden naar store_les.php
=========================================================
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe Les Toevoegen</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

<h1>Nieuwe Les Toevoegen</h1>

<!-- Hier komen foutmeldingen -->
<div id="fouten"></div>

<!--
FORMULIER:
- method POST → veilig verzenden
- onsubmit → JavaScript validatie
-->

<form action="store_les.php" method="POST" onsubmit="return controleFormulier()">

    <label>Lesnaam</label>
    <input type="text" id="lesnaam" name="lesnaam">
    <br><br>

    <label>Trainer</label>
    <input type="text" id="trainer" name="trainer">
    <br><br>

    <label>Datum</label>
    <input type="date" id="datum" name="datum">
    <br><br>

    <label>Tijd</label>
    <input type="time" id="tijd" name="tijd">
    <br><br>

    <button type="submit">Les opslaan</button>

</form>

</body>
</html>