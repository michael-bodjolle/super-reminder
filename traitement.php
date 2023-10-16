<?php
if(!isset($_SESSION)){
    session_start();
}
require_once "class/task.php";


$task= new Task();

if (isset($_POST['task'])){
    // if (isset($_GET['plop'])){
      $result = $task->addTask($_SESSION['id'],$_POST['task']);
       
        echo json_encode($result);
    
    }

    if (isset($_GET['task'])){
//    $task->addTask($_SESSION['id'],$_POST['task']);
   $result = $task->getTask($_SESSION['id']);
    echo json_encode($result);
    // die();
}

  if (isset($_POST['task'])) {
    $result = $task->deleteTask($_POST['id']);
       
    echo json_encode($result);
  }   