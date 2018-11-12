<?php
// Déclaration de la classe user qui hérite de database
class music extends database{
    // Liste des attributs
    public $id;
    public $name;
    public $link;
    public $difficulty;
    public $maxNote;
     /*
      * Déclaration de la méthode showMusicList qui permet de récupérer les champs de la table musicList
      */
    function showMusicList(){
        //déclaration de la requête SQL qui permet de récupérer les champs id name , difficulty et maxNote de la table musicList
        $request = 'SELECT `id`, `name`, `link`, `difficulty`, `maxNote` '
                . 'FROM `A12BC_musicList`';
        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showMusicList = $this->db->prepare($request);
        // si la requête c'est éxécuté retourne un object dans la variable $showUser
        if ($showMusicList ->execute()) {
            return $showMusicList->fetchAll(PDO::FETCH_OBJ);
        }
    }
    /*
      * Déclaration de la méthode newMusic qui permet de stocker de nouvelle music
      */
    function  newMusic(){
        //Déclaration de la requête SQL qui permet de stocker les données d'une nouvelle music dans la base de donnée
        $request = 'INSERT INTO `A12BC_musicList` (`name`, `link`, `difficulty`, `maxNote`, `id_A12BC_scale` ) '
                . 'VALUES ( :name, :link, :difficulty, :maxNote, :scaling)';
        // Préparation de la requête SQL pour éviter les injections SQL
        $newMusic = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $newMusic->bindValue(':name', $this->name, PDO::PARAM_STR);
        $newMusic->bindValue(':link', $this->link, PDO::PARAM_STR);
        $newMusic->bindValue(':difficulty', $this->difficulty, PDO::PARAM_STR);
        $newMusic->bindValue(':maxNote', $this->maxNote, PDO::PARAM_STR);
        $newMusic->bindValue(':scaling', $this->scaling, PDO::PARAM_STR);
        // Si la requête c'est éxécuté on termine la fonction 
        if ($newMusic->execute()) {
            return;
        } else {
            // Si la requête ne c'est pas éxécuté on stock un message d'érreur dans le tableau d'érreur pour informer l'utilisateur
            $formError['execute'] = 'une erreur dans le processus d\'inscription';
        }
    }
    
    /*
      * Déclaration de la méthode checkIfMusicExist qui permet de vérifier si une music existe déja
      */
    public function checkIfMusicExist() {
        //Déclaration de la requête SQL qui permet de vérifier si une musique est déja présente ou non dans la base de donnée
        $request = 'SELECT COUNT(`link`) AS `count` FROM `A12BC_musicList`'
        . ' WHERE `link` = :link ';
        // Préparation de la requête SQL pour éviter les injections SQL
        $check = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $check->bindValue(':link', $this->link, PDO::PARAM_STR);
        // Si la requête c'est éxécuté , récupére un booléan 
        if ($check->execute()) {
            $result = $check->fetch(PDO::FETCH_OBJ);
            $bool = $result->count;
        } else {
            // si la requête ne s'éxécute pas , on déclare une variable et on lui donne la valeur False
            $bool = FALSE;
        }
        // Retourne bool et stop la fonction
        return $bool;
    }
}

