<?php
// Déclaration des regex
$regexPseudonyme = '/^[0-9A-z]+$/';
$regexPasse = '/^[0-9A-z]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
// Déclaration des tableaux d'érreur
$formErrorLogIn = array();
$formErrorConnect = array();

if (isset($_POST['logIn'])) {
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
    if (isset($_POST['pseudo'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $pseudo = htmlspecialchars($_POST['pseudo']);
        //test de la regex si elle est invalide
        if (!preg_match($regexPseudonyme, $pseudo)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['pseudo'] = 'Le champ pseudonyme est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($pseudo)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['pseudo'] = 'Champ requis.';
        }
    }
    if (isset($_POST['password'])) {
        //déclarion de la variable password avec le htmlspecialchar qui change l'interprétation des balises par le code
        $password = htmlspecialchars($_POST['password']);
        //test de la regex si elle est invalide
        if (!preg_match($regexPasse, $password)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['password'] = 'Le champ mot de passe est incorrect';
        }
        // verifie si le champs password et vide
        if (empty($password)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['password'] = 'Champ requis.';
        }
    }
    // Test de connection
    if (count($formErrorConnect) == 0) {
        // Instenciation de la classe user
        $user = new user();
        $user->pseudo = $pseudo;
        // Appel de la méthode userConnection
        if ($user->userConnection()) {
            if (password_verify($password, $user->password)) {
                //la connexion se fait
                //On rempli la session avec les attributs de l'objet issus de l'hydratation
                $_SESSION['pseudo'] = $user->pseudo;
                $_SESSION['id'] = $user->id;
                $_SESSION['email'] = $user->email;
                $_SESSION['role'] = $user->name;
                $_SESSION['isConnect'] = true;
                // Redirection sur la page du profil de l'utilisateur
                header('location: ../view/profil.php?id=' . $user->id);
            } else {
                //la connexion échoue
                $message = 'Erreur de connection';
            }
        }
    }
}

// Déclaration d'un tableau d'érreur
$formErrorSignIn = array();
if (isset($_POST['signIn'])) {
    // Instanciation de la classe user
    $newUser = NEW user();
    
    if (isset($_POST['pseudoSignIn'])) {
        //déclarion de la variable pseudoSignIn avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newUser->pseudoSignIn = htmlspecialchars($_POST['pseudoSignIn']);
        //test de la regex si elle est invalide
        if (!preg_match($regexPseudonyme, $newUser->pseudoSignIn)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorSignIn['pseudoSignIn'] = 'Le champ pseudonyme est incorrect';
        }
        // verifie si le champs pseudoSignIn et vide
        if (empty($newUser->pseudoSignIn)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorSignIn['pseudoSignIn'] = 'Champ requis.';
        }
    }
    if(!empty($_POST['passwordSignIn']) && !empty($_POST['passwordConfirm']) && $_POST['passwordSignIn'] == $_POST['passwordConfirm']) {
        //déclarion de la variable passwordSignIn avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newUser->passwordSignIn = htmlspecialchars($_POST['passwordSignIn']);
        //test de la regex si elle est invalide
        if (!preg_match($regexPasse, $newUser->passwordSignIn)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorSignIn['passwordSignIn'] = 'Le champ mot de passe est incorrect';
        }
        $newUser->passwordSignIn =  password_hash($_POST['passwordSignIn'], PASSWORD_DEFAULT);
        // verifier que le champs passwordSignIn et vide
        if (empty($newUser->passwordSignIn)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorSignIn['passwordSignIn'] = 'Champ requis.';
        }
    }
    if (isset($_POST['email'])) {
        $newUser->email = htmlspecialchars($_POST['email']);
        //le filtre permet de verifier l'email
        if (!FILTER_VAR($newUser->email, FILTER_VALIDATE_EMAIL)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorSignIn['email'] = 'Le champ email est incorrect.';
        }
        if (empty($newUser->email)) {
            $formErrorSignIn['email'] = 'Champ requis.';
        }
    }
    // Test si l'utilisateur n'existe pas déja
    if (count($formErrorSignIn) == 0) {
        $check = $newUser->checkIfUserExist();
        if ($check == '0') {
            if (!$newUser->newUser()) {
                $formError['submit'] = 'Il y a eu un problème';
            }
        } else if ($check === FALSE) {
            $formErrorSignIn['submit'] = 'Il y a eu un problème';
        } else {
            $formErrorSignIn['submit'] = 'Ce profile existe déja';
        }
    }
}
?>


