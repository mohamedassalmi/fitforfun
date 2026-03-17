<?php include 'header.php'; ?>

<h1>Nieuwe Les Toevoegen</h1>

<form action="store_les.php" method="POST" onsubmit="return controleFormulier()">

<label>Lesnaam</label>
<input type="text" id="lesnaam" name="lesnaam" required>

<label>Trainer</label>
<input type="text" id="trainer" name="trainer" required>

<label>Datum</label>
<input type="date" id="datum" name="datum" required>

<label>Tijd</label>
<input type="time" id="tijd" name="tijd" required>

<button type="submit">Les opslaan</button>

</form>

<script src="script.js"></script>