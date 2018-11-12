<?php

class scale extends database {

    public function showScale() {
        //déclaration de la requête SQL qui permet de récupérer les champs id et pseudo de la table lr2User
        $request = 'SELECT `id`, `scaleType` '
                . 'FROM `A12BC_scale` ';
        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showScale = $this->db->prepare($request);
        // si la requête c'est éxécuté retourne un object dans la variable $showUser
        if ($showScale->execute()) {
            return $showScale->fetchAll(PDO::FETCH_OBJ);
        }
    }
}