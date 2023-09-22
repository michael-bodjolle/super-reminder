<?php

class Database
{

  public $PDO;


  public function __construct()
  {
    try {
      //connexion à la base de données
      $this->PDO = new PDO("mysql:host=localhost;port=3307;dbname=super-reminder;charset=utf8", 'root', '',);
      //force PDO à préparer les requêtes
      $this->PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      //indique à PDO de bien générer une erreur fatale si un problème survient. 
      $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      var_dump($this->PDO);
      return $this->PDO;
    } catch (PDOException $e) {
      echo "Erreur : " . $e->getMessage();
    }
  }


  public function connectDb()
  {
  }



  public function close()
  {
    $this->PDO = null;
  }
}
