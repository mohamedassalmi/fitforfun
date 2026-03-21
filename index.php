<?php
/*
=========================================================
INDEX.PHP
Hoofdpagina van het FitForFree systeem

Vanuit deze pagina kan de gebruiker navigeren naar:
- Lessen beheren
- Reserveringen maken
- Statistieken bekijken

Dit bestand bevat alleen frontend navigatie.
=========================================================
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>FitForFree Dashboard</title>

    <!-- CSS koppeling -->
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript koppeling -->
    <script src="script.js"></script>
</head>

<body>

<h1>FitForFree Systeem</h1>

<div class="container">

    <!-- Navigatie knoppen -->

    <!-- Nieuwe les -->
    <a href="create_les.php">
        <button>Nieuwe les maken</button>
    </a>
    <br><br>

    <!-- Overzicht lessen -->
    <a href="read_lessen.php">
        <button>Overzicht lessen</button>
    </a>
    <br><br>

    <!-- Reservering -->
    <a href="reservering.php">
        <button>Nieuwe reservering</button>
    </a>
    <br><br>

    <!-- Statistiek -->
    <a href="stats.php">
        <button>Leden per periode</button>
    </a>
    <br><br>

    <!-- Extra feature -->
    <button onclick="toggleDarkMode()">Dark mode</button>

</div>

</body>
</html>