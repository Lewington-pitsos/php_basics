<?php


include $_SERVER['DOCUMENT_ROOT'] . '/shared/queries.inc.php';
include $_SERVER['DOCUMENT_ROOT'] . '/shared/db.inc.php';

$res = $pdo->query($all_puzzles);

$content = $_SERVER['DOCUMENT_ROOT'] . '/index.html.php';

include $_SERVER['DOCUMENT_ROOT'] . '/shared/scaffold.html.php';
