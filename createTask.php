<?php
require_once __DIR__ . '../db/connect.php';
require_once __DIR__ . '../class/task.class.php';
session_start();

if (!isset($_SESSION['user_id']))
  header("Location: index.php");

$classTask = new Task($bd);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $success = $classTask->createTask($_POST, $_SESSION['user_id']);
  if (!$success[0])
    echo $success[1];
  else
    header("Location: ./list.php");
}

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/nav.php';
require_once __DIR__ . '/components/createTaskForm.php';
