<?php
include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';

$res = $pdo->query(puzzle_info($_GET['id']));

$puzzle = $res->fetch();

$content = $_SERVER['DOCUMENT_ROOT'] . '/puzzle/edit/index.html.php';

include $_SERVER['DOCUMENT_ROOT'] . '/shared/scaffold.html.php';
