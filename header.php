<?php

require_once "class/config.php";

// if (isset($_SESSION['id'])) {

//     $connexionbdd = $db->PDO->connectDb();

//     $ssid = $_SESSION['id'];
//     $recupid = $connexionbdd->prepare("SELECT * FROM user WHERE id ='$ssid'");
//     $recupid->execute();
//     $results = $recupid->fetch(PDO::FETCH_ASSOC);


// }


?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body mg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="register.php">Inscription</a>
        <a class="nav-link active" aria-current="page" href="connexion.php">Connexion</a>
        <a class="nav-link active" aria-current="page" href="todolist.php">To do list</a>
      </div>
    </div>
  </div>
</nav>
<div class="nav">
  <!-- <ul>
  <li><a href="index.php">Accueil</a></li>
  <li><a href="connexion.php">Connexion</a></li>
  <li><a href="register.php">Inscription</a></li>
  <!-- <li><a href="about.asp">About</a></li> -->
  <!-- </ul> -->
  <!-- </div>   -->