<?php
include 'database.php';
include 'header.php';

$les_id = $_GET['id'] ?? null;

if($_POST){
  $stmt = $conn->prepare("INSERT INTO reserveringen (les_id, naam) VALUES (?, ?)");
  $stmt->execute([$les_id, $_POST['naam']]);

  echo "Succesvol gereserveerd!";
}
?>

<h1>Reservering maken</h1>

<form method="POST">
  <input name="naam" placeholder="Jouw naam">
  <button>Reserveer</button>
</form>