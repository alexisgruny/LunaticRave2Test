<?php
// Instanciation de la classe user
$showUser = NEW user();
// Récupération de l'id par l'url
$showUser->id = $_GET['id'];
// Appel de la méthode userById
$getUser = $showUser->userById();

// Instanciation de la classe rival
$rival = NEW rival();
// Récupération des id par l'url
$rival->id1 = $_SESSION['id'];
$rival->id2 = $_GET['id'];
// appel de la méthode showRival
$showRival = $rival->showIfRival();

if (isset($_GET['delete'])) {
    // Instanciatiation de la classe user
    $deleteUser = NEW user();
    // Récupération de l''id par l'url
    $deleteUser->id = $_GET['id'];
    // Appel de la méthode userDelete
    $deleteUser->userDelete();
    session_destroy();
    header('location: ../view/connexionForm.php');
}

// check si un amis est déja Rival
if(isset($_GET['rival'])){
    $rival->isAccept = true;
    $newRival = $rival->newRival();
    header('location: playerProfil.php?id=' . $getUser->id);
}

//Remove un rival de sa liste
if (isset($_GET['deleteRival'])) {
    // Instanciatiation de la classe rival
    $rival = NEW rival();
    // Récupération de l''id par l'url
    $rival->id1 = $_SESSION['id'];
    $rival->id2 = $_GET['id'];
    // Appel de la méthode userDelete
    $deleteRivalDone = $rival->deleteRivalByUser();
    header('location: ../view/playerProfil.php?id=' . $_GET['id']);
}
?>
