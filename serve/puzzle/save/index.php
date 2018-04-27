<?php

include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';


$query = update_puzzle($_POST);

$pdo->exec($query);

header('location: /');
exit();
