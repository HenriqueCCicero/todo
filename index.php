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
  <a href="new.php">Adicionar Novo</a>
  <ul>
    <?php foreach ($todos as $position => $todo) { ?>
      <li>
        <?= $todo?> 
        <form action="delete-todo.php" method="post">
          <input type="hidden" name="id" value="<?= $position  ?>">
          <button>Excluir</button>
        </form>
      </li>
    <?php } ?>
  </ul>
</body>

</html>