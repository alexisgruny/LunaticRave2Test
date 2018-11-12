<?php

class clearType extends database {

    public function showClearType() {
        //déclaration de la requête SQL qui permet de récupérer les champs id et name de la table clearType
        $request = 'SELECT `id`, `name` '
                . 'FROM `A12BC_clearType` ';
        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showClearType= $this->db->prepare($request);
        // si la requête c'est éxécuté retourne un object dans la variable $showClearType
        if ($showClearType->execute()) {
            return $showClearType->fetchAll(PDO::FETCH_OBJ);
        }
    }
}

