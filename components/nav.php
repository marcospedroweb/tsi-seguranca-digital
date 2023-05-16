<header class="bg-primary">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-xxl">
      <h1 class="visually-hidden">Task App</h1>
      <a class="navbar-brand fw-bold" href="./index.php">Task App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          if (!isset($_SESSION['user_id'])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="./register.php">Criar conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.php">Login</a>
            </li>
          <?php
          } else {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="./list.php">Lista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>