<?php

class Database
{

  public $db;


  public function __construct()
  {
    try {
      //connexion à la base de données
      $this->db = new PDO("mysql:host=localhost;port=3307;dbname=super-reminder;charset=utf8", 'root', '',);
      //force PDO à préparer les requêtes
      $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      //indique à PDO de bien générer une erreur fatale si un problème survient. 
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      // return $this->db;
    } catch (PDOException $e) {
      echo "Erreur : " . $e->getMessage();
    }
  }


  public function connectDb()
  {
  }



  public function close()
  {
    $this->db = null;
  }
}
