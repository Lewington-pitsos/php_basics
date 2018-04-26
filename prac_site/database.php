<?php
include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';
include $_SERVER['DOCUMENT_ROOT'] . '/shared/magic_quotes.inc.php';

try {
  if (isset($_GET['delete'])) {
    $delete = "DELETE FROM people WHERE id = :id";
    $prep = $pdo->prepare($delete);
    $prep->bindValue(':id', $_GET['delete']);
    $prep->execute();
  } elseif(isset($_GET['name'])) {
    $insert = 'INSERT INTO people SET name = :name, age = 67';
    $prep = $pdo->prepare($insert);
    $prep->bindValue(':name', $_GET['name']);
    $prep->execute();
  }
  $people = $pdo->query('SELECT * FROM people');
} catch (PDOException $e) {
  echo 'fuck! It fucked up.';
  echo $e->getMessage();
  exit();
}

include 'people.html.php'

?>
