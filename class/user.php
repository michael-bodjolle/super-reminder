<?php

require_once "Database.php";

class User extends Database
{


    // Propriété pour la connexion à la base de données

    public function register(string $login, string $name, string $password, string $repeatpassword)
    {
        //  $this->bdd->connectPDO();



        if (!empty($login) && !empty($name) && !empty($password) && !empty($repeatpassword)) {

            if ($password == $repeatpassword) {

                $passwordhash = password_hash($password, PASSWORD_BCRYPT);
                $query = $this->db->prepare("INSERT INTO user (login, name, password) VALUES (:login, :name, :password)");



                $query->bindParam(':login', $login);
                $query->bindParam(':name', $name);
                $query->bindParam(':password', $passwordhash);


                $query->execute();

                header('location:connexion.php');
            } else echo "mot de passe incorrect";
        }
    }

    public function connexion($login, $password)
    {

        if (!empty($login) && !empty($password)) {


            $query = $this->db->prepare("SELECT * FROM `user` WHERE login = :login");
            // Liez les valeurs aux paramètres

            $query->bindParam(':login', $login, PDO::PARAM_STR);
            //  $query->bindParam(':password', $password);
            $query->execute();
            $results = $query->fetch(PDO::FETCH_ASSOC);
            // var_dump($results);


            if (!empty($login) && password_verify($password, $results['password'])) {

                $_SESSION['id'] = $results['id'];
                header('location:index.php');
            } else echo "nom d'utilisateur ou mot de passe incorrect";
        } else echo "veuillez saisir tout saisir les champs";

        //  Exécutez la requête d'insertion
    }

    public function getUserByIdFromSession() {
        if (isset($_SESSION['id'])) {
            $ssid = $_SESSION['id'];
            $query = $this->db->prepare("SELECT * FROM user WHERE id = :id");
            $query->bindParam(':id', $ssid);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
            
        } else {
            return null; // La session n'a pas d'ID défini
        }
    }


    public function Disconnect()
    {
        session_unset();
        session_destroy();
        header('location:connexion.php');
    }
}
