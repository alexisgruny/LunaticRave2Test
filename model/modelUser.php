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
        $request = 'INSERT INTO `A12BC_user` (`pseudo`, `password`, `email`) '
                . 'VALUES ( :pseudo, :password, :email)';
        // Préparation de la requête SQL pour éviter les injections SQL
        $newUser = $this->db->prepare($request);
        // Remplacement des marqueurs nominatif
        $newUser->bindValue(':pseudo', $this->pseudoSignIn, PDO::PARAM_STR);
        $newUser->bindValue(':password', $this->passwordSignIn, PDO::PARAM_STR);
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
     * METHODE modifyUser() permet de modifier un utilisateur déja existant
     */
    public function modifyUser() {
        $request = 'UPDATE `A12BC_user` '
                . 'SET `pseudo` = :pseudo, `password` = :password, `email` = :email '
                . 'WHERE `id` = :id ';
//prépare la requéte sql dans la database
        $modify = $this->db->prepare($request);
        $modify->bindValue(':pseudo', $this->pseudo);
        $modify->bindValue(':password', $this-> newPassword);
        $modify->bindValue(':email', $this->email);
        $modify->bindValue(':id', $this->id);
// si la requéte est préparé , je l'execute
        $updateUser = $modify->execute();
//et je retourne tout les résultat dans un tableau
        return $updateUser;
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
        $check->bindValue(':pseudo', $this->pseudoSignIn, PDO::PARAM_STR);
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
    
    public function userById() {
        $request ='SELECT `id`, `pseudo`, `email`, `password` '
                . 'FROM `A12BC_user` '
                . 'WHERE `id` = :id ';
        $userId = $this->db->prepare($request);
        $userId->bindValue(':id', $this->id, PDO::PARAM_INT);
        $userId->execute();
        if (is_object($userId)) {
            // Stocke la requête dans $userId / fetchAll = va chercher tous les résultat / FETCH_OBJ = un tableau d'objet
            $isObjectResult = $userId->fetch(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    
    /* 
     *  MÉTHODE userConnection() Permet de connecter un utilisateur 
     */
    
    public function userConnection() {
        $state = false;
        $request = 'SELECT `A12BC_user`.`id`, `A12BC_user`.`pseudo`, `A12BC_user`.`password`, `A12BC_user`.`email`, `A12BC_role`.`name` '
                . 'FROM `A12BC_user` '
                . 'INNER JOIN `A12BC_role` ON `A12BC_user`.`id_A12BC_role` = `A12BC_role`.`id`  '
                . 'WHERE `A12BC_user`.`pseudo` = :pseudo';
        $result = $this->db->prepare($request);
        $result->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
                // On hydrate
                $this->pseudo = $selectResult->pseudo;
                $this->password = $selectResult->password;
                $this->email = $selectResult->email;
                $this->id = $selectResult->id;
                $this->name = $selectResult->name;
                $state = true;
            }
        }
        return $state;
    }
}
