 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">
 </head>

 <body>
  <h1>People:</h1>
  <ul>
    <?php foreach($people as $person): ?>
      <li>
        <strong>
          <?php echo $person['name'] ?>
        </strong>
        <a href=<?php
          $id = $person['id'];
          echo "/database.php?delete=$id";
        ?>>delete</a>
      </li>
    <?php endforeach; ?>
  </ul>
 </body>

 </html>
