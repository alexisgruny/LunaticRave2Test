<?php
class music extends database{
    public $id;
    public $name;
    public $link;
    public $difficulty;
    public $maxNote;
    
    function showMusicList(){
        $request = 'SELECT `id`, `name`, `link`, `difficulty`, `maxNote` '
                . 'FROM `A12BC_musicList`';
        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showMusicList = $this->db->prepare($request);
        // si la requête c'est éxécuté retourne un object dans la variable $showUser
        if ($showMusicList ->execute()) {
            return $showMusicList->fetchAll(PDO::FETCH_OBJ);
        }
    }
}

