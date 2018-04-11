<?php

$name = $_GET['name'];

$str = '';
for ($i=0; $i < 20; $i++) {
  $str .= 'wanker ';
}

if (isset($name)) {
  include 'named.html.php';
} else {
  include 'complex.html.php';
}
