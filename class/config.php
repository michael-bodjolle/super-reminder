<?php

session_start();

require_once "connect-bdd.php";
$bdd= new Database();
$bdd = $bdd->connectDb();

// require_once "class/user.php";
// $user= new User($bdd);