<?php
class User
{
  var $bd;

  function __construct($bd)
  {
    $this->bd = $bd;
  }




  public function register(array $data): array
  {
    $name = $data['name'] ?? '';
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';

    if (!$name)
      return array(false, 'Insira um nome valido');
    if (!$email)
      return array(false, 'Insira um nome valido');
    if (!$password)
      return array(false, 'Insira um nome valido');

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (name, email, password)
            VALUES (:name, :email, :password)";

    $insert = $this->bd->prepare($sql);
    $success = $insert->execute(array(
      ':name' => $name,
      ':email' => $email,
      ':password' => $password
    ));

    if ($success) {

      return array(true, 'Conta criada com sucesso. Faça seu login');
    } else
      return array(false, 'Houve algum erro');
  }

  public function editar(array $dados): array
  {

    return array(true, 'Usuario editado com sucesso');
  }

  public function login(array $data): array
  {
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';

    if (!$email || !$password)
      return array(false, 'Insira um e-mail e uma senha válidos');

    $sql = "SELECT * FROM user WHERE email = :email";
    $query = $this->bd->prepare($sql);
    $query->execute(array(':email' => $email));
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
      return array(false, 'Usuário não encontrado');
    }

    $storedPassword = $user['password'];


    if (!password_verify($password, $storedPassword)) {
      return array(false, 'Senha incorreta');
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];

    return array(true, 'Login bem-sucedido');
  }

  public function logout()
  {
    session_start();
    session_destroy();

    // Redirecione para a página de login ou qualquer outra página desejada
    header("Location: index.php");
    exit();
  }
}
