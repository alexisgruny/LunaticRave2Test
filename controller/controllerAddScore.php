<?php
// Déclaration d'un tableau d'érreur
$formError = array();
// Déclaration de regex
$regexNumber = '/^[0-9]+$/';
$regexMusicName =  '/^[0-9a-zA-Z- ★]+$/'; 
// Instanciation de la classe music
$musicList = new music ();
// Appel de la méthode showMusicList
$music = $musicList->showMusicList();
// Instanciation de la classe ClearType
$clearList = new ClearType();
// Appel de la méthode showClearType
$clear = $clearList->showClearType();

// Vérification pour ajout de Score
if (isset($_POST['addScore'])) {
    // Instanciation de la classe scores
    $addScore = new scores();
    //Si ExScore existe , la passer au test regex , si elle passe la stocker dans ExScore sinon c'est vide
    if (isset($_POST['exScore'])) {
        //déclarion de la variable ExScore avec le htmlspecialchar qui change l'interprétation des balises par le code
        $addScore->exScore = htmlspecialchars($_POST['exScore']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $addScore->exScore)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['exScore'] = 'Le champ exScore est incorrect';
        }
        // verifie si le champs ExScore et vide
        if (empty($addScore->exScore)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['exScore'] = 'Champ requis.';
        }
    }
    if (isset($_POST['badpoor'])) {
        //déclarion de la variable BadPoor avec le htmlspecialchar qui change l'interprétation des balises par le code
        $addScore->badpoor = htmlspecialchars($_POST['badpoor']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $addScore->badpoor)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['badpoor'] = 'Le champ badpoor est incorrect';
        }
        // verifie si le champs BadPoor et vide
        if (!isset($addScore->badpoor)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['badpoor'] = 'Champ requis.';
        }
    }
    if (isset($_POST['maxCombo'])) {
        //déclarion de la variable MaxCombo avec le htmlspecialchar qui change l'interprétation des balises par le code
        $addScore->maxCombo = htmlspecialchars($_POST['maxCombo']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $addScore->maxCombo)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['maxCombo'] = 'Le champ maxCombo est incorrect';
        }
        // verifie si le champs MaxCombo et vide
        if (empty($addScore->maxCombo)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['maxCombo'] = 'Champ requis.';
        }
    }
    if (isset($_POST['noteHitted'])) {
        //déclarion de la variable NoteHitted avec le htmlspecialchar qui change l'interprétation des balises par le code
        $addScore->noteHitted = htmlspecialchars($_POST['noteHitted']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $addScore->noteHitted)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['noteHitted'] = 'Le champ noteHitted est incorrect';
        }
        // verifie si le champs NoteHitted et vide
        if (empty($addScore->noteHitted)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['noteHitted'] = 'Champ requis.';
        }
    }
    if (isset($_POST['clearType'])) {
        //déclarion de la variable ClearType avec le htmlspecialchar qui change l'interprétation des balises par le code
        $addScore->clearType = htmlspecialchars($_POST['clearType']);
        //test de la regex si elle est invalide
        if (!preg_match($regexNumber, $addScore->clearType)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['clearType'] = 'Le champ clearType est incorrect';
        }
        // verifie si le champs ClearType et vide
        if (empty($addScore->clearType)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['clearType'] = 'Champ requis.';
        }
    }
    if (isset($_POST['music'])) {
        //déclarion de la variable Music avec le htmlspecialchar qui change l'interprétation des balises par le code
        $addScore->music = htmlspecialchars($_POST['music']);
        //test de la regex si elle est invalide
        if (!preg_match($regexMusicName, $addScore->music)) {
            // Si le champ n'est pas valide, stocker dans le tableau le rapport d'érreur
            $formError['music'] = 'Le champ clearType est incorrect';
        }
        // verifie si le champs Music et vide
        if (empty($addScore->music)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['music'] = 'Champ requis.';
        }
    }
    if (count($formError) == 0) {
        // Récupére l'id par l'url
        $addScore->id = $_GET['id'];
        // Appel de la méthode newScore
        $newScore = $addScore->newScore();
    }
}