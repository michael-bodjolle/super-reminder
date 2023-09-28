<?php

$db = new PDO("mysql:host=localhost;port=3307;dbname=super-reminder;charset=utf8", 'root', '',);

if (isset($_POST['task']) && strlen($_POST['name']) > 0) {
    echo 'coucou';

}