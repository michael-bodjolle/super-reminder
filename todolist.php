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
require_once "traitement.php";
 
 


?> 
    
    </header>
    <main>
    <h1>Tasks's list</h1>
        
        <form  id="new-task-form" method="post">
            <input 
               type="text" 
               id="new-task-input" 
               name="task"
               placeholder="what i need to do?"
               autocomplete="off">
               
            <input 
               type="button"
               id="new-task-add" 
               value="Add task"
               >

               
        </form>

        <section class="task-list">

        <h2> Tasks </h2>

        <div id="tasks"> 
            
        </div>
        </main>
        <footer>

        </footer>
        <script defer src="js/script.js"></script>
</body>
</html>