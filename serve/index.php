<?php

include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';

$res = $pdo->query($all_puzzles);
$pdo = null;

$content = $_SERVER['DOCUMENT_ROOT'] . '/index.html.php';

include $_SERVER['DOCUMENT_ROOT'] . '/shared/scaffold.html.php';
