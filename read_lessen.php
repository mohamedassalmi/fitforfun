<?php
include 'database.php';
include 'header.php';

/*
Alle lessen ophalen uit database
*/
$stmt = $conn->query("SELECT * FROM lessen ORDER BY datum, tijd");
$lessen = $stmt->fetchAll();
?>

<h1>Overzicht Lessen</h1>

<?php if(empty($lessen)): ?>
<p>Geen lessen gevonden</p>
<?php else: ?>

<?php foreach($lessen as $les): ?>

<div class="card">
  <h3><?= $les['lesnaam'] ?></h3>
  <p><?= $les['trainer'] ?></p>
  <p><?= $les['datum'] ?> - <?= $les['tijd'] ?></p>

  <a href="update_les.php?id=<?= $les['id'] ?>">Bewerken</a>
  <a href="delete_les.php?id=<?= $les['id'] ?>">Verwijderen</a>
  <a href="reservering.php?id=<?= $les['id'] ?>">Reserveer</a>
</div>

<?php endforeach; ?>

<?php endif; ?>