<?php


try {
  $pdo = new PDO('mysql:host=localhost;dbname=phptest', 'php_basic', 'q1as1z2qwe2');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM people WHERE id = $id";
    $pdo->exec($delete);
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
