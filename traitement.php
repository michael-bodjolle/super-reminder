<?php
require_once "header.php";
require_once "class/task.php";
$db = new PDO("mysql:host=localhost;port=3307;dbname=super-reminder;charset=utf8", 'root', '',);

$task= new Task();

if (isset($_POST['task'])){
    $task->addtask($_SESSION['id'],$_POST['task']);
    echo 'coucou';
}