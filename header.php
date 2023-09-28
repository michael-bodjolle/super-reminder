<?php

require_once "class/config.php";

if (isset($_POST['disconnect'])) {
  $user->Disconnect();
}

?>
<?php if (isset($_SESSION['id']) ) : ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body mg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="todolist.php">To do list</a>
        <a class="nav-link active" aria-current="page" href="register.php">Profil</a>
        <form method="POST" action="">
                <button type="disconnect" name="disconnect" class="btn btn-warning ml-5">Log out</button>
            </form>
      </div>
    </div>
  </div>
</nav>
<div class="nav">

  <?php else : ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body mg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="register.php">Subscribe</a>
        <a class="nav-link active" aria-current="page" href="connexion.php">Sign in</a>
      
      </div>
    </div>
  </div>

  <?php endif ?>
</nav>
<div class="nav">
