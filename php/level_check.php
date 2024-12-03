<?php

include 'script.php';

session_start();

$level = 0;
$required = 2;
if (isset($_SESSION['nivel'])) $level = levelToNumber($_SESSION['nivel']);
if (isset($_GET['required'])) $required = (int) $_GET['required'];

echo json_encode((bool) levelAllowed($level, $required));
// echo json_encode([ $level, $required ]);