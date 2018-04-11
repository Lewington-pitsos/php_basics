<?php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=phptest', 'php_basic', 'q1as1z2qwe2');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
  echo 'fuck! It fucked up.';
  exit();
}

echo 'the connection worked, yay';

?>
