<?php
// Déclaration de la classe user qui hérite de database
class user extends database {
// Liste des attributs
    public $id;
    public $pseudo;
    public $password;
    public $email;
    public $id_A12BC_role;

    /*
     *  MÉTHODE newUser() Permet l'inscription d'un nouvel utilisateur 
     */

    public function newUser() {
        //Déclaration de la requête SQL qui permet de stocker les données d'inscription dans la base de donnée
        $request = 'INSERT INTO `A12BC_user` (`pseudo`, `password`, `mail`)'
                . 'VALUES ( :pseudo, :password, :email)';
        // Préparation de la requête SQL pour éviter les injections SQL
        $newUser = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $newUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $newUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        $newUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        // Si la requête c'est éxécuté on termine la fonction 
        if ($newUser->execute()) {
            return;
        } else {
            // Si la requête ne c'est pas éxécuté on stock un message d'érreur dans le tableau d'érreur pour informer l'utilisateur
            $formError['execute'] = 'une erreur dans le processus d\'inscription';
        }
    }

    /*
     *  MÉTHODE checkIfUserExist() Permet de vérifier qu'un utilisateur n'existe pas déja 
     */
    
    public function checkIfUserExist() {
        //Déclaration de la requête SQL qui permet de vérifier si un utilisateur est déja présent ou non dans la base de donnée
        $request = 'SELECT COUNT(`id`) AS `count` FROM `A12BC_user`'
        . ' WHERE `pseudo` = :pseudo OR `email` = :email';
        // Préparation de la requête SQL pour éviter les injections SQL
        $check = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $check->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $check->bindValue(':password', $this->password, PDO::PARAM_STR);
        $check->bindValue(':email', $this->email, PDO::PARAM_STR);
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
    
    /*
     *  MÉTHODE showUser() Permet de récupérer les utilisateurs de la base de donnée pour pouvoir les afficher
     */
    
        public function showUser() {
        //déclaration de la requête SQL qui permet de récupérer les champs id et pseudo de la table lr2User
        $request = 'SELECT `id`, `pseudo`, `email` '
                . 'FROM `A12BC_user` ';
        //Préparation de la requête SQL pour éviter les injection de code SQL
        $showUser = $this->db->prepare($request);
        // si la requête c'est éxécuté retourne un object dans la variable $showUser
        if ($showUser->execute()) {
            return $showUser->fetchAll(PDO::FETCH_OBJ);
        }
    }
}