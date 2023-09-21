<?php 

require_once "connect-bdd.php";

class User extends Database {
    
    public $db; 

    public function __construct($db) {

        $this->db = new PDO("mysql:host=localhost;port= 3307 ;dbname=super-reminder","root", "");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    }
    // Propriété pour la connexion à la base de données

    public function register( string $login, string $name, string $password, string $repeatpassword)
    {
        //  $this->bdd->connectDb();
         
        
        
        if (!empty($login) && !empty($name) && !empty($password) && !empty($repeatpassword)){
          
            if ($password == $repeatpassword){
            $query = $this->db->prepare("INSERT INTO user (login, name, password) VALUES (:login, :name, :password)");
            
           
       
              $query->bindParam(':login', $login);
              $query->bindParam(':name', $name);
              $query->bindParam(':password', $password);

    
        $query->execute();
        var_dump($query);
        header('location:connexion.php');
        
       
      
      } else echo "mot de passe incorrect";
      }  
   }

    
}


