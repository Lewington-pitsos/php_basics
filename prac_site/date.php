<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Today&rsquo;s Date</title>
</head>
<body>
<p>Today&rsquo;s date (according to this web server) is
<?php
echo htmlspecialchars($_GET['x'], ENT_QUOTES, 'UTF-8');
?>
</p>
</body>
</html>
