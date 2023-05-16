<div class="container-xl">
  <a href="./createTask.php" class="btn btn-success mb-4 mt-5">Criar tarefa</a>
  <h2 class="mb-4 fw-bold">Todas suas tarefas</h2>
  <div>
    <form action="#" method="POST">
      <h3 class="fs-5">Tarefas feitas</h3>
      <ul>
        <?php
        if (isset($tasks) && !empty($tasks)) {
          foreach ($tasks as $task) {
            if ($task['task_status']) {


        ?>
              <li class="mb-3">Tarefa: <span class="fw-bold"><?php echo $task['task_name'] ?></span> - <a href="<?php echo "./editTask.php?id=" . $task['id'] ?>" class="btn btn-primary">Editar</a> | <button class="btn btn-danger" name="id" value="<?php echo $task['id'] ?>">Apagar</button> </li>
          <?php
            }
          }
        } else {
          ?>
          <li>Não há tarefas cadastradas</li>
        <?php
        }
        ?>
      </ul>
      <h3 class="fs-5">Tarefas NÃO feitas</h3>
      <ul>
        <?php
        if (isset($tasks) && !empty($tasks)) {
          foreach ($tasks as $task) {
            if (!$task['task_status']) {


        ?>
              <li class="mb-3">Tarefa: <span class="fw-bold"><?php echo $task['task_name'] ?></span> - <a href="<?php echo "./editTask.php?id=" . $task['id'] ?>" class="btn btn-primary">Editar</a> | <button class="btn btn-danger" name="id" value="<?php echo $task['id'] ?>">Apagar</button> </li>
          <?php
            }
          }
        } else {
          ?>
          <li>Não há tarefas cadastradas</li>
        <?php
        }
        ?>
      </ul>
    </form>

  </div>
</div>