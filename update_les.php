<?php
include 'database.php';
include 'header.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM lessen WHERE id = ?");
$stmt->execute([$id]);
$les = $stmt->fetch();
?>

<h1>Les aanpassen</h1>

<form action="save_update.php" method="POST">

<input type="hidden" name="id" value="<?= $id ?>">

<input name="lesnaam" value="<?= $les['lesnaam'] ?>">
<input name="trainer" value="<?= $les['trainer'] ?>">
<input type="date" name="datum" value="<?= $les['datum'] ?>">
<input type="time" name="tijd" value="<?= $les['tijd'] ?>">

<button>Opslaan</button>

</form>