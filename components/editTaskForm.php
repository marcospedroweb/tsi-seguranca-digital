<div class="container-xl mt-4">
  <div class="bg-secondary py-4">
    <h2 class="text-center mb-3">Edite a tarefa</h2>
    <div class="row justify-content-center-align-item-center">
      <form action="#" method="POST" class="col-12 col-lg-6 text-center mx-auto">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="taskName" name="task_name" value="<?php echo $task['task_name'] ?>" placeholder="Nome" value=required>
          <label for="taskName">Nome da tarefa</label>
        </div>
        <div class="form-floating">
          <select class="form-select" id="floatingSelect" name="task_status" aria-label="Floating label select example" required>
            <option value="" selected>A tarefa foi feita?</option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
          </select>
          <label for="floatingSelect">Status da tarefa</label>
        </div>
        <input type="hidden" class="form-control" id="taskId" name="task_id" placeholder="Nome" value="<?php
                                                                                                        echo $task['id'] ?>">
        <input type="hidden" class="form-control" id="taskDate" name="task_date" placeholder="Nome" value="<?php
                                                                                                            echo $task['task_date'] ?>">
        <button type="submit" class="btn btn-primary mt-4">Criar tarefa</button>
      </form>
    </div>
  </div>
</div>