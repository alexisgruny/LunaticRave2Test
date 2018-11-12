<?php

//Déclaration d'un tableau d'érreur
$formError = array();
//Déclaration de regex
$regexNumberLetter = '/^[0-9a-zA-Z- ★]+$/';
// Instanciation de la classe Scale()
$scale = new scale ();
// Appel de la methode showScale()
$showScale = $scale->showScale();

// Si le button addBms est appuyé
if (isset($_POST['addBms'])) {
    // Instanciation de la classe music()
    $newMusic = new music ();
    // Si name existe
    if (isset($_POST['name'])) {
        //déclarion de la variable name avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newMusic->name = htmlspecialchars($_POST['name']);
        //Test regex
        if (!preg_match($regexNumberLetter, $newMusic->name)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['name'] = 'Le champ exScore est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($newMusic->name)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['name'] = 'Champ requis.';
        }
    }
    if (isset($_POST['link'])) {
        //déclarion de la variable link avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newMusic->link = htmlspecialchars($_POST['link']);
        //test de la regex si elle est invalide
        if (!filter_var($newMusic->link, FILTER_VALIDATE_URL)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['link'] = 'Le champ badpoor est incorrect';
        }
        // verifie si le champs link et vide
        if (empty($newMusic->link)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['link'] = 'Champ requis.';
        }
    }
    if (isset($_POST['difficulty'])) {
        //déclarion de la variable difficulty avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newMusic->difficulty = htmlspecialchars($_POST['difficulty']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumberLetter, $newMusic->difficulty)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['difficulty'] = 'Le champ maxCombo est incorrect';
        }
        // verifie si le champs difficulty et vide
        if (empty($newMusic->difficulty)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['difficulty'] = 'Champ requis.';
        }
    }
    if (isset($_POST['scaling'])) {
        //déclarion de la variable scaling avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newMusic->scaling = htmlspecialchars($_POST['scaling']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumberLetter, $newMusic->scaling)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['scaling'] = 'Le champ maxCombo est incorrect';
        }
        // verifie si le champs scaling et vide
        if (empty($newMusic->scaling)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['scaling'] = 'Champ requis.';
        }
    }
    if (isset($_POST['maxNote'])) {
        //déclarion de la variable maxNote avec le htmlspecialchar qui change l'interprétation des balises par le code
        $newMusic->maxNote = htmlspecialchars($_POST['maxNote']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumberLetter, $newMusic->maxNote)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['maxNote'] = 'Le champ noteHitted est incorrect';
        }
        // verifie si le champs maxNote et vide
        if (empty($newMusic->maxNote)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['maxNote'] = 'Champ requis.';
        }
    }
    //Check si une music existe déja
    //Si le formError est vide
    if (count($formError) == 0) {
        // appel de la méthode checkIfMusicExist
        $check = $newMusic->checkIfMusicExist();
        // si la méthode nous renvois 0
        if ($check == '0') {
            // on test l'appel de la méthode newMusic
            // Si elle ne passe pas on remplie le formError avec le type d'érreur
            if (!$newMusic->newMusic()) {
                $formError['submit'] = 'Il y a eu un problème';
            }
            // si le check retourne false il y'a un probléme lors de l'execution de la méthode
        } else if ($check === FALSE) {
            $formError['submit'] = 'Il y a eu un problème';
            // sinon cela veut dire qu'une music existe déja
        } else {
            $formError['submit'] = 'Ce profile existe déja';
        }
    }
}

