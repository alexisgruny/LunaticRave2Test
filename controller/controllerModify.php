<?php

$regexPseudonyme = '/^[0-9A-z]+$/';
$regexPasse = '/^[0-9A-z]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$formErrorModify = array();
$modifyUser = NEW user();
$modifyUser->id = $_GET['id'];
$getPassword = $modifyUser->userById();
if (isset($_POST['modify'])) {
    if (password_verify($_POST['oldPassword'], $getPassword->password)) {
        if (isset($_POST['pseudo'])) {
            //déclarion de la variable pseudo avec le htmlspecialchar qui change l'interprétation des balises par le code
            $modifyUser->pseudo = htmlspecialchars($_POST['pseudo']);
            //test de la regex si elle est invalide
            if (!preg_match($regexPseudonyme, $modifyUser->pseudo)) {
                // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
                $formErrorModify['pseudo'] = 'Le champ pseudonyme est incorrect';
            }
            // verifie si le champs de nom et vide
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
            // verifier que le champs de nom et vide
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
            if (empty($modifyUser->email)) {
                $formErrorModify['email'] = 'Champ requis.';
            }
        }
        if (!$modifyUser->modifyUser()) {
            $formErrorModify['modify'] = 'Il y a eu un problème';
        }
    }
}
if(isset($_POST['back'])){
    header('location: ../view/profil.php');
}
?>

