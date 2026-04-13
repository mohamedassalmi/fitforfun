<?php
/*
INDEX.PHP
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>FitForFree Dashboard</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

<h1>FitForFree Systeem</h1>

<div class="container">

    <!-- LESSEN -->
    <a href="create_les.php">
        <button>Nieuwe les maken</button>
    </a>
    <br><br>

    <a href="read_lessen.php">
        <button>Overzicht lessen</button>
    </a>
    <br><br>

    <!-- RESERVERINGEN -->
    <a href="reservering.php">
        <button>Nieuwe reservering</button>
    </a>
    <br><br>

    <a href="read_reserveringen.php">
        <button>Overzicht reserveringen</button>
    </a>
    <br><br>

    <!-- LEDEN -->
    <a href="read_leden.php">
        <button>Beheer leden</button>
    </a>
    <br><br>

    <!-- MEDEWERKERS -->
    <a href="read_medewerker.php">
        <button>Beheer medewerkers</button>
    </a>
    <br><br>

    <!-- STATISTIEKEN -->
    <a href="stats.php">
        <button>Leden per periode</button>
    </a>
    <br><br>

    <!-- EXTRA -->
    <button onclick="toggleDarkMode()">Dark mode</button>

</div>

</body>
</html> 