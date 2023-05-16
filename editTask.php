<?php
require_once __DIR__ . '../db/connect.php';
require_once __DIR__ . '../class/task.class.php';
session_start();

if (!isset($_SESSION['user_id']))
  header("Location: index.php");

$classTask = new Task($bd);
$taks_id = $_GET['id'];
$task = $classTask->getTaskById($taks_id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $success = $classTask->updateTask($_POST);
  if (!$success[0])
    echo $success[1];
  else
    header("Location: ./list.php");
}

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/nav.php';
require_once __DIR__ . '/components/editTaskForm.php';
