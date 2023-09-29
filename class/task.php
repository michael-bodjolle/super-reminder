<?php

require_once "Database.php";


class Task extends Database
{
    // Propriété pour la connexion à la base de données
    public function addtask( int $id_user, string $task)
    {
        //  $this->bdd->connectPDO();
        if (!empty($task)) {
            $query = $this->db->prepare("INSERT INTO tasks (id_user, task) VALUES (:id_user, :task)");
            $query->bindParam(':id_user', $id_user);
            $query->bindParam(':task', $task);
            $results = $query->execute();

            return $results;
            

     }
    }

    // public function gettask()
    // {
    //     //  $this->bdd->connectPDO();
    //     if (isset($_SESSION['id_user'])) {
    //         $query = $this->PDO->prepare("SELECT * FROM tasks ");
    //         $query->execute();
    //         $results = $query->fetch(PDO::FETCH_ASSOC);
    
    //  }
    // }
}
