<?php
include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';

$pdo->exec(delete_puzzle($_POST['id']));

header('location: /');
exit();
