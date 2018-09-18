<?php
$regexPseudonyme = '/^[0-9A-z]+$/';
$regexPasse = '/^[0-9A-z]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$formErrorLogIn = array();
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
if (isset($_POST['pseudo'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $pseudo = htmlspecialchars($_POST['pseudo']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPseudonyme, $pseudo)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorLogIn['pseudo'] = 'Le champ pseudonyme est incorrect';
    }
    // verifie si le champs de nom et vide
    if (empty($pseudo)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorLogIn['pseudo'] = 'Champ requis.';
    }
}
if (isset($_POST['password'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $password = htmlspecialchars($_POST['password']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPasse, $password)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorLogIn['password'] = 'Le champ mot de passe est incorrect';
    }
    // verifie si le champs de nom et vide
    if (empty($password)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorLogIn['password'] = 'Champ requis.';
    }
}
$formErrorSignIn = array();
if (isset($_POST['pseudoSignIn'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $pseudoSignIn = htmlspecialchars($_POST['pseudoSignIn']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPseudonyme, $pseudoSignIn)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorSignIn['pseudoSignIn'] = 'Le champ pseudonyme est incorrect';
    }
    // verifie si le champs de nom et vide
    if (empty($pseudoSignIn)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorSignIn['pseudoSignIn'] = 'Champ requis.';
    }
}
if (isset($_POST['passwordSignIn'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $passwordSignIn = htmlspecialchars($_POST['passwordSignIn']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPasse, $passwordSignIn)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorSignIn['passwordSignIn'] = 'Le champ mot de passe est incorrect';
    }
    // verifie si le champs de nom et vide
    if (empty($passwordSignIn)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorSignIn['passwordSignIn'] = 'Champ requis.';
    }
}
if (isset($_POST['passwordConfirm'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPasse, $passwordConfirm)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorSignIn['passwordConfirm'] = 'Le champ confirmation de mot de passe est incorrect';
    }
    // verifie si le champs de nom et vide
    if (empty($passwordConfirm)) {
        //stocker dans le tableau le rapport d'érreur
        $formErrorSignIn['passwordConfirm'] = 'Champ requis.';
    }
}
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    //le filtre permet de verifier l'email
    if (!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)) {
        $formErrorSignIn['email'] = 'Le champ email est incorrect.';
    }
    if (empty($email)) {
        $formErrorSignIn['email'] = 'Champ requis.';
    }
}
include('view/menu.php')
?>


