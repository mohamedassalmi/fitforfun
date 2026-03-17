<?php
include 'database.php';

$stmt = $conn->prepare("UPDATE lessen SET lesnaam=?, trainer=?, datum=?, tijd=? WHERE id=?");
$stmt->execute([
  $_POST['lesnaam'],
  $_POST['trainer'],
  $_POST['datum'],
  $_POST['tijd'],
  $_POST['id']
]);

echo "Les bijgewerkt!";
echo "<br><a href='read_lessen.php'>Terug</a>";
?>