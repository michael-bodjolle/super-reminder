<?php
require_once "header.php";
require_once "class/task.php";


$task= new Task();

if (isset($_POST['task'])){
    $task->addtask($_SESSION['id'],$_POST['task']);
    $result = json_encode($task);
    var_dump($task);
} 