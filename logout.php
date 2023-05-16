<?php
require_once __DIR__ . '../db/connect.php';
require_once __DIR__ . '../class/user.class.php';
session_start();

if (isset($_SESSION['user_id']))
  header("Location: index.php");

$classUser = new User($bd);
$classUser->logout();
