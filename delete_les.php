<?php
include 'database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM lessen WHERE id = ?");
$stmt->execute([$id]);

echo "Les verwijderd!";
echo "<br><a href='read_lessen.php'>Terug</a>";
?>