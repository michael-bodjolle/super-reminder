<?php

require_once "Database.php";


class Task extends Database
{
    // Propriété pour la connexion à la base de données
    public function addTask( int $id_user, string $task)
    {
        //  $this->bdd->connectPDO();
        if (!empty($task)) {
            $query = $this->db->prepare("INSERT INTO tasks (id_user, task) VALUES (:id_user, :task)");
            $query->bindParam(':id_user', $id_user);
            $query->bindParam(':task', $task);
            $query->execute(); 
            
            //var_dump($query);
            // return $results;
            

     }
    }

    public function getTask($id_user )
    {
        
        // if (isset($_SESSION['id'])) {
            $query = $this->db->prepare("SELECT * FROM tasks");
            $query->execute();
            $results = $query->fetchAll();

          return $results ;
    
    //  }
    }
    
    // public function UdpdateTask($id)
    // {
        
    //     $query = $this->db->prepare("UPDATE tasks SET task=:task  WHERE id=:id");
    //     $query->bindParam(':id_user', $id_user);
    //     $query->bindParam(':task', $task);
    //     $query->execute();

    // }
    

    public function deleteTask($id)
    {

        $query = $this->db->prepare("DELETE FROM tasks WHERE id = :id ");
        $query->bindParam(':id', $id);
        $query->execute(); 
        
        
     
    }

} 
