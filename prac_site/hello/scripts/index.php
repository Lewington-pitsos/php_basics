<html>
<head>
<link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
<div id="example">Example 2-1</div>
<div id="content">
<h1>Hello, <?php
$name = $_GET['name'];
if ($name == 'bob') {
  for ($i=0; $i < 10 ; $i++) {
    echo 'peasant ';
  }
} else {
  echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
}
?></h1>
<p>Great to meet you. Welcome to the beginning of your
PHP programming odyssey.</p>
</div>
<div id="footer"></div>
</body>
</html>
