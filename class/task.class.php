<?php
class Task
{
  var $bd;

  function __construct($bd)
  {
    $this->bd = $bd;
  }

  public function getTaskById($taskId)
  {
    $sql = "SELECT * FROM task WHERE id = :taskId";
    $query = $this->bd->prepare($sql);
    $query->execute(array(':taskId' => $taskId));
    $task = $query->fetch(PDO::FETCH_ASSOC);

    return $task;
  }


  public function getAllTasks(int $user_id): array
  {
    $sql = "SELECT * FROM Task WHERE user_id = :userId";
    $stmt = $this->bd->prepare($sql);
    $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return array(true, $tasks);
  }

  public function createTask(array $data, int $user_id): array
  {
    $taskName = $data['task_name'] ?? '';
    $taskStatus = $data['task_status'] ?? false;
    $taskDate = $data['task_date'] ?? '';

    if (!$taskName || !$taskDate) {
      return array(false, 'Por favor, preencha todos os campos obrigatórios.');
    }

    $sql = "INSERT INTO task (task_name, task_status, task_date, user_id)
            VALUES (:taskName, :taskStatus, :taskDate, :user_id)";

    $insert = $this->bd->prepare($sql);
    $success = $insert->execute(array(
      ':taskName' => $taskName,
      ':taskStatus' => $taskStatus,
      ':taskDate' => $taskDate,
      ':user_id' => $user_id
    ));

    if ($success) {
      return array(true, 'A nova tarefa foi criada com sucesso.');
    } else {
      return array(false, 'Ocorreu um erro ao criar a nova tarefa.');
    }
  }
  public function updateTask(array $data): array
  {
    $taskId = $data['task_id'] ?? '';
    $taskName = $data['task_name'] ?? '';
    $taskStatus = $data['task_status'] ?? false;
    $taskStatus = filter_var($taskStatus, FILTER_VALIDATE_BOOLEAN);
    $taskDate = $data['task_date'] ?? '';

    if (!$taskId || !$taskName || !$taskDate) {
      return array(false, 'Por favor, preencha todos os campos obrigatórios.');
    }

    $sql = "UPDATE task
              SET task_name = :taskName, task_status = :taskStatus, task_date = :taskDate
              WHERE id = :taskId";

    $update = $this->bd->prepare($sql);
    $success = $update->execute(array(
      ':taskName' => $taskName,
      ':taskStatus' => $taskStatus,
      ':taskDate' => $taskDate,
      ':taskId' => $taskId
    ));

    if ($success) {
      return array(true, 'A tarefa foi atualizada com sucesso.');
    } else {
      return array(false, 'Ocorreu um erro ao atualizar a tarefa.');
    }
  }
  // public function completeTask(int $taskId): array
  // {
  //   $sql = "UPDATE task
  //           SET task_status = true
  //           WHERE task_id = :taskId";

  //   $update = $this->bd->prepare($sql);
  //   $success = $update->execute(array(
  //     ':taskId' => $taskId
  //   ));

  //   if ($success) {
  //     return array(true, 'A tarefa foi concluída.');
  //   } else {
  //     return array(false, 'Ocorreu um erro ao concluir a tarefa.');
  //   }
  // }
  public function deleteTask(int $taskId): array
  {
    $sql = "DELETE FROM task
            WHERE id = :taskId";

    $delete = $this->bd->prepare($sql);
    $success = $delete->execute(array(
      ':taskId' => $taskId
    ));

    if ($success) {
      return array(true, 'A tarefa foi excluída.');
    } else {
      return array(false, 'Ocorreu um erro ao excluir a tarefa.');
    }
  }
}
