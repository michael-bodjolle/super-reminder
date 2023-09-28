<?php

require_once "connect-bdd.php";

class Task extends Database
{
    // Propriété pour la connexion à la base de données
    public function addtask( $id_user,$task)
    {
        //  $this->bdd->connectPDO();
        if (!empty($task)) {
            $query = $this->PDO->prepare("INSERT INTO tasks (id_user, task) VALUES (:id_user, :task)");
            $query->bindParam(':id_user', $id_user);
            $query->bindParam(':task', $task);
            $query->execute();

     }
    }
}
