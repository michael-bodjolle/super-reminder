<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
<?php 

require_once "header.php";

$userData = $user->getUserByIdFromSession();

if ($userData) {
    
    
    echo " <br><h1>BIENVENUE </h1>  " . $userData['login'] . "<br>";
    
} 


 
?> 
</header>
<main>
    <br><h1>TA TODO</h1>
</main>
 <footer></footer>
</body>
</html>