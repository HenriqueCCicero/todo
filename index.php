<?php
session_start();
$todos = $_SESSION['todos'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema To-Do</title>
</head>

<body>
  <ul>
    <?php foreach ($todos as $todo) { ?>
      <li>
        <?= $todo?>
      </li>
    <?php } ?>
  </ul>
</body>

</html>