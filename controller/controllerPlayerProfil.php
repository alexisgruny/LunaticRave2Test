<?php
// Instanciation de la classe user
$showUser = NEW user();
// Récupération de l'id par l'url
$showUser->id = $_GET['id'];
// Appel de la méthode userById
$getUser = $showUser->userById();

if (isset($_GET['delete'])) {
    // Instanciatiation de la classe user
    $deleteUser = NEW user();
    // Récupération de l''id par l'url
    $deleteUser->id = $_GET['id'];
    // Appel de la méthode userDelete
    $deleteUserDone = $deleteUser->userDelete();
    session_destroy();
    header('location: ../view/ConnexionForm.php');
}
?>
