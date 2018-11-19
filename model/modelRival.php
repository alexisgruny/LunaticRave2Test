<?php

// Déclaration de la classe rival qui hérite de database
class rival extends database {
    
    // Liste des attributs
    public $id;
    public $isAccept;
    public $id_A12BC_user;
    public $id_A12BC_user_have;
  
    /*
     *  Methode newRival qui permet d'ajouter quelqu'un en amis/rival
     */

    public function newRival() {
        //Déclaration de la requête SQL qui permet d'ajouter un amis/rival
        $request = 'INSERT INTO `A12BC_friends` (`isAccept`, `id_A12BC_user`, `id_A12BC_user_have`) '
                . 'VALUES (:isAccept, :id1, :id2) ';
        // Préparation de la requête SQL pour éviter les injections SQL
        $newRival = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $newRival->bindValue(':isAccept', $this->isAccept, PDO::PARAM_INT);
        $newRival->bindValue(':id1', $this->id1, PDO::PARAM_INT);
        $newRival->bindValue(':id2', $this->id2, PDO::PARAM_INT);
        // Si la requête c'est éxécuté on termine la fonction
        if ($newRival->execute()) {
            return;
        } else {
// Si la requête ne c'est pas éxécuté on stock un message d'érreur dans une variable pour informer l'utilisateur
            $error = 'une erreur dans le processus d\'inscription';
        }
    }
    
    public function showRival(){
        //déclaration de la requête SQL qui permet de récupérer les rivals d'un utilisateur
        $request = 'SELECT `A12BC_friends`.`id` AS `idRival`, `A12BC_friends`.`isAccept`, `A12BC_friends`.`id_A12BC_user`, `A12BC_user`.`pseudo`, `A12BC_user`.`id` '
                . 'FROM `A12BC_user` '
                . 'INNER JOIN `A12BC_friends` ON `A12BC_user`.`id` = `A12BC_friends`.`id_A12BC_user_have` '
                . 'WHERE `id_A12BC_user` = :id';

        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showRival = $this->db->prepare($request);
        $showRival->bindValue(':id', $this->id, PDO::PARAM_INT);
        // si la requête c'est éxécuté retourne un object dans la variable $showRival
        if ($showRival->execute()) {
            return $showRival->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
    /*
     * La méthode ShowRival permet de d'afficher les rivals
     */
    
    public function showIfRival(){
        //déclaration de la requête SQL qui permet de récupérer les rivals d'un utilisateur
        $request = 'SELECT `id`, `isAccept`, `id_A12BC_user`, `id_A12BC_user_have` '
                . 'FROM `A12BC_friends` '
                . 'WHERE `id_A12BC_user` = :id1 AND `id_A12BC_user_have` = :id2';

        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showRival = $this->db->prepare($request);
        $showRival->bindValue(':id1', $this->id1, PDO::PARAM_INT);
        $showRival->bindValue(':id2', $this->id2, PDO::PARAM_INT);
        // si la requête c'est éxécuté retourne un object dans la variable $showUser
        if ($showRival->execute()) {
            return $showRival->fetch(PDO::FETCH_OBJ);
        }
    }
    
     /*
     *  MÉTHODE deleteRival() Permet de supprimer un utilisateur 
     */

    public function deleteRival() {
        // Prépare la requête SQL qui permet de supprimer un utilisateur
        $deleteUser = $this->db->prepare('DELETE FROM `A12BC_friends` WHERE `id` = :id');
        // Remplacement des marqueurs nominatif
        $deleteUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        // Execute la requête 
        $deleteUser->execute();
        return $deleteUser;
    }
    
    public function deleteRivalByUser() {
        // Prépare la requête SQL qui permet de supprimer un utilisateur
        $deleteUser = $this->db->prepare('DELETE FROM `A12BC_friends` WHERE `id_A12BC_user` = :id1 AND `id_A12BC_user_have` = :id2');
        // Remplacement des marqueurs nominatif
        $deleteUser->bindValue(':id1', $this->id1, PDO::PARAM_INT);
        $deleteUser->bindValue(':id2', $this->id2, PDO::PARAM_INT);
        // Execute la requête 
        $deleteUser->execute();
        return $deleteUser;
    }
}
