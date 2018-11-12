<?php

class scores extends database {
          
    /*
     *  Méthode ShowScores Qui permet de récuperer les champs des tables Scores, ClearType, User, MusicList et Scale en fonction d'un utilisateur
     */
    public function showScores() {
        //déclaration de la requête SQL qui permet de récupérer les champs dans plusieur table avec les jointures
        $request = 'SELECT `A12BC_scores`.`id`, `A12BC_scores`.`exScore`, `A12BC_scores`.`badpoor`, `A12BC_scores`.`maxCombo`, `A12BC_scores`.`noteHitted`, `A12BC_musicList`.`name` AS music, `A12BC_musicList`.`link`, `A12BC_musicList`.`difficulty`, `A12BC_musicList`.`maxNote`, `A12BC_clearType`.`name` AS clearType '
                . 'FROM `A12BC_scores` '
                . 'INNER JOIN `A12BC_musicList` ON `A12BC_scores`.`id_A12BC_musicList` = `A12BC_musicList`.`id` '
                . 'INNER JOIN `A12BC_clearType` ON `A12BC_scores`.`id_A12BC_clearType` = `A12BC_clearType`.`id` '
                . 'INNER JOIN `A12BC_scale` ON `A12BC_musicList`.`id_A12BC_scale` = `A12BC_scale`.`id` '
                . 'INNER JOIN `A12BC_user` ON `A12BC_scores`.`id_A12BC_user` = `A12BC_user`.`id` '
                . 'WHERE `A12BC_user`.`id` = :id AND `A12BC_scale`.`id` = :scale';
        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showScores = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $showScores->bindValue(':id', $this->id, PDO::PARAM_INT);
        $showScores->bindValue(':scale', $this->scale, PDO::PARAM_INT);
        // si la requête c'est éxécuté retourne un object dans la variable $showScore
        if ($showScores->execute()) {
            return $showScores->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
    /*
     *  Méthode newScore Permet d'ajouter un score dans la table score
     */
    function  newScore(){
        //déclaration de la requête SQL qui permet d'ajouter un nouveau score dans la BDD
        $request = 'INSERT INTO `A12BC_scores` (`exScore`, `badpoor`, `maxCombo`, `noteHitted`, `id_A12BC_user`, `id_A12BC_musicList`, `id_A12BC_clearType` ) '
                . 'VALUES ( :exScore, :badpoor, :maxCombo, :noteHitted, :id_A12BC_user, :id_A12BC_musicList, :id_A12BC_clearType )';
        // Préparation de la requête SQL pour éviter les injections SQL
        $newScore = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $newScore->bindValue(':exScore', $this->exScore, PDO::PARAM_INT);
        $newScore->bindValue(':badpoor', $this->badpoor, PDO::PARAM_INT);
        $newScore->bindValue(':maxCombo', $this->maxCombo, PDO::PARAM_INT);
        $newScore->bindValue(':noteHitted', $this->noteHitted, PDO::PARAM_INT);
        $newScore->bindValue(':id_A12BC_user', $this->id, PDO::PARAM_INT);
        $newScore->bindValue(':id_A12BC_musicList', $this->music, PDO::PARAM_INT);
        $newScore->bindValue(':id_A12BC_clearType', $this->clearType, PDO::PARAM_INT);
        // Si la requête c'est éxécuté on termine la fonction 
        if (!$newScore->execute()) {
            // Si la requête ne c'est pas éxécuté on stock un message d'érreur dans le tableau d'érreur pour informer l'utilisateur
            $formError['execute'] = 'une erreur dans le processus d\'inscription';
        }
        return;
    }
}

