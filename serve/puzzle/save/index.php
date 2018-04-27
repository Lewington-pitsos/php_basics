<?php

include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';

if ($_POST['id'] == 0) {
  $pdo->exec(new_puzzle($_POST));
} else {
  $pdo->exec(update_puzzle($_POST));

  $pdo->exec(remove_steps($_POST['id']));

  if (array_key_exists('step', $_POST)) {
    var_dump($_POST['step']);
    var_dump($_POST['id']);
    $pdo->exec(insert_steps($_POST['step'], $_POST['id']));
  }

}

header('location: /');
exit();
