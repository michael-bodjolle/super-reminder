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

            $passwordhash = password_hash($password,PASSWORD_BCRYPT);
            $query = $this->db->prepare("INSERT INTO user (login, name, password) VALUES (:login, :name, :password)");
            
           
            
              $query->bindParam(':login', $login);
              $query->bindParam(':name', $name);
              $query->bindParam(':password', $passwordhash  );

    
        $query->execute();
        
        header('location:connexion.php');
        
       
      
      } else echo "mot de passe incorrect";
      }  
   }

   public function connexion($login, $password){
    
    if (!empty($login) && !empty($password)){
        
        $query = $this->db->prepare("SELECT * FROM `user` WHERE login = :login)");
          // Liez les valeurs aux paramètres
        
         $query->bindParam(':login', $login, PDO::PARAM_STR);
        //  $query->bindParam(':password', $password);
        $query->execute();
        $results = $query->fetch(PDO::FETCH_ASSOC);
        var_dump($query);


        if (!empty($login) && password_verify($password, $results['password'])) {

            $_SESSION['id'] = $results['id'];
            header('location:index.php');

        } else echo "nom d'utilisateur ou mot de passe incorrect";
    } else echo "veuillez saisir tout saisir les champs";

    //  Exécutez la requête d'insertion
    }
}
        


   

    



