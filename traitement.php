<?php

$db = new PDO("mysql:host=localhost;port=3307;dbname=super-reminder;charset=utf8", 'root', '',);

if (isset($_POST['name']) && strlen($_POST['name']) > 0) {


