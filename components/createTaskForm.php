<div class="container-xl mt-4">
  <div class="bg-secondary py-4">
    <h2 class="text-center mb-3">Crie sua Tarefa</h2>
    <div class="row justify-content-center-align-item-center">
      <form action="#" method="POST" class="col-12 col-lg-6 text-center mx-auto">
        <div class="form-floating">
          <input type="text" class="form-control" id="taskName" name="task_name" placeholder="Nome" required>
          <label for="taskName">Nome da tarefa</label>
        </div>
        <input type="hidden" class="form-control" id="taskStatus" name="task_status" placeholder="Nome" value="false" required>
        <input type="hidden" class="form-control" id="taskDate" name="task_date" placeholder="Nome" value="<?php
                                                                                                            echo date("Y-m-d") ?>">
        <button type="submit" class="btn btn-primary mt-4">Criar tarefa</button>
      </form>
    </div>
  </div>
</div>