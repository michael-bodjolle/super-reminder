<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
   

<header>
        
<?php 
require_once "header.php";

?> 
    
    </header>
    <h1>listes des taches</h1>
        
        <form action="" id="nouvelle-tache-form">
            <input 
               type="text" 
               id="nouvelle-tache-input" 
               placeholder="qu'est ce que j'ai prévu ?"
               autocomplete="off">
               
            <input 
               type="submit"
               id="nouvelle-tache-ajouer" 
               value="Ajouter tache">
               
        </form>
</body>
</html>