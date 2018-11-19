<?php 
$rival = NEW rival();
$rival->id = $_SESSION['id'];
$showRival = $rival->showRival();

//Remove un rival de sa liste
if (isset($_GET['delete'])) {
    // Instanciatiation de la classe rival
    $rival = NEW rival();
    // Récupération de l''id par l'url
    $rival->id = $_GET['id'];
    // Appel de la méthode userDelete
    $deleteRivalDone = $rival->deleteRival();
    header('location: ../view/friendsRival.php');
}

