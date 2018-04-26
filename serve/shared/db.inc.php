<?php
include $_SERVER['DOCUMENT_ROOT'] . '/shared/queries.inc.php';

try {
  $pdo = new PDO('mysql:host=localhost;dbname=actual_logic_puzzles', 'alp', 'Q!AS!Z@qwe2');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
  echo 'fuck! It fucked up.';
  echo $e->getMessage();
  exit();
}
