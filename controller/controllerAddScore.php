<?php

$formError = array();
$regexNumber = '/^[0-9]+$/';

$musicList = new music ();
$music = $musicList->showMusicList();
    
if (isset($_POST['addScore'])) {
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
    if (isset($_POST['exScore'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $exScore = htmlspecialchars($_POST['exScore']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $exScore)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['exScore'] = 'Le champ exScore est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($exScore)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['exScore'] = 'Champ requis.';
        }
    }
    if (isset($_POST['badpoor'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $badpoor = htmlspecialchars($_POST['badpoor']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $badpoor)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['badpoor'] = 'Le champ badpoor est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($badpoor)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['badpoor'] = 'Champ requis.';
        }
    }
    if (isset($_POST['maxCombo'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $maxCombo = htmlspecialchars($_POST['maxCombo']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $maxCombo)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['maxCombo'] = 'Le champ maxCombo est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($maxCombo)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['maxCombo'] = 'Champ requis.';
        }
    }
    if (isset($_POST['noteHitted'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $noteHitted = htmlspecialchars($_POST['noteHitted']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $noteHitted)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['noteHitted'] = 'Le champ noteHitted est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($noteHitted)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['noteHitted'] = 'Champ requis.';
        }
    }
    if (isset($_POST['clearType'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $clearType = htmlspecialchars($_POST['clearType']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $clearType)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formErrorConnect['clearType'] = 'Le champ clearType est incorrect';
        }
        // verifie si le champs de nom et vide
        if (empty($clearType)) {
            //stocker dans le tableau le rapport d'érreur
            $formErrorConnect['clearType'] = 'Champ requis.';
        }
    }
}