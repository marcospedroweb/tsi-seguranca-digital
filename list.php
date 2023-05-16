<?php
require_once __DIR__ . '/db/connect.php';
require_once __DIR__ . '/class/task.class.php';
session_start();

if (!isset($_SESSION['user_id']))
  header("Location: index.php");

$classTask = new Task($bd);
$tasks = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $success = $classTask->deleteTask(intval($_POST['id']));
  if (!$success[0])
    echo $success[1];
  else
    header("Location: ./list.php");
}

$success = $classTask->getAllTasks($_SESSION['user_id']);
if (!$success[0]) {
  var_dump($success[1]);
  die();
} else {
  $tasks = $success[1];
}

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/nav.php';
require_once __DIR__ . '/components/listTasks.php';
