<?php
// Déclaration des regex
$regexPseudonyme = '/^[0-9A-z]+$/';
$regexPasse = '/^[0-9A-z]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
// Déclaration du tableau d'érreur
$formErrorModify = array();
// Instanciation de la class user
$modifyUser = NEW user();
// récuparation de l'id par l'url
$modifyUser->id = $_GET['id'];
// Appel de la méthode userById
$getPassword = $modifyUser->userById();

// Récupére toute les informations pour envoyer la modification des informations de l'utilisateur
if (isset($_POST['modify'])) {
    // Test si les mots de passe correspondent avant de faire les vérification pour la modification
    if (password_verify($_POST['oldPassword'], $getPassword->password)) {
        if (isset($_POST['pseudo'])) {
            //déclarion de la variable pseudo avec le htmlspecialchar qui change l'interprétation des balises par le code
            $modifyUser->pseudo = htmlspecialchars($_POST['pseudo']);
            //test de la regex si elle est invalide
            if (!preg_match($regexPseudonyme, $modifyUser->pseudo)) {
                // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
                $formErrorModify['pseudo'] = 'Le champ pseudonyme est incorrect';
            }
            // verifie si le champs pseudo et vide
            if (empty($modifyUser->pseudo)) {
                //stocker dans le tableau le rapport d'érreur
                $formErrorModify['pseudo'] = 'Champ requis.';
            }
        }
        if (!empty($_POST['newPassword']) && !empty($_POST['passwordConfirm']) && $_POST['newPassword'] == $_POST['passwordConfirm']) {
            //déclarion de la variable newPassword avec le htmlspecialchar qui change l'interprétation des balises par le code
            $modifyUser->newPassword = htmlspecialchars($_POST['newPassword']);
            //test de la regex si elle est invalide
            if (!preg_match($regexPasse, $modifyUser->newPassword)) {
                // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
                $formErrorModify['newPassword'] = 'Le champ mot de passe est incorrect';
            }
            $modifyUser->newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
            // verifier que le champs newPassword et vide
            if (empty($modifyUser->newPassword)) {
                //stocker dans le tableau le rapport d'érreur
                $formErrorModify['newPassword'] = 'Champ requis.';
            }
        }
        if (isset($_POST['email'])) {
            $modifyUser->email = htmlspecialchars($_POST['email']);
            //le filtre permet de verifier l'email
            if (!FILTER_VAR($modifyUser->email, FILTER_VALIDATE_EMAIL)) {
                // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
                $formErrorModify['email'] = 'Le champ email est incorrect.';
            }
            // verifier que le champs email et vide
            if (empty($modifyUser->email)) {
                //stocker dans le tableau le rapport d'érreur
                $formErrorModify['email'] = 'Champ requis.';
            }
        }
        // Test si la méthode s'éxecute , sinon on remplie le tableau d'érreur
        if (!$modifyUser->modifyUser()) {
            $formErrorModify['modify'] = 'Il y a eu un problème';
        }
    }
}

// Redirection pour annuler la modification
if(isset($_POST['back'])){
    header('location: ../view/profil.php');
}
?>

