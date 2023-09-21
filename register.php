<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <header>    <?php 
include "header.php";

if (isset($_POST['submit'])){
$user->register($_POST['login'], $_POST['name'], $_POST['password'], $_POST['repeatpassword']);
// var_dump($user);
} 

?></header>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="border p-4 bg-light-gray">
                <br><h1>Register</h1>

                
                <form action="" method="post">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="login" placeholder="Login">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" name="repeatpassword" placeholder="Repeat Password">
                    </div>
                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Subscribe" name="submit">
                    </div>
                </form>
             
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>
</html>