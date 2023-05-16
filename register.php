<?php
require_once __DIR__ . '../db/connect.php';
require_once __DIR__ . '../class/user.class.php';
session_start();

if (isset($_SESSION['user_id']))
  header("Location: index.php");

$classUser = new User($bd);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $success = $classUser->register($_POST);
  if (!$success[0])
    echo $success[1];
  else
    header("Location: ./login.php");
}

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/nav.php';
require_once __DIR__ . '/components/registerForm.php';
