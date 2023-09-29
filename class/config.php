<?php

session_start();

require_once "class/Database.php";
$db= new Database();


require_once "class/user.php";
$user= new User($db);

