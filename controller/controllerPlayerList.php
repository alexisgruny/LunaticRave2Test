<?php
// Instanciation de la classe user
$showPlayerList = NEW user();
// Appel de la méthode showUser
$allPlayer = $showPlayerList->showUser();
// Supprime l'utilisateur demandé
if (isset($_GET['delete'])) {
    // Instanciatiation de la classe user
    $deleteUser = NEW user();
    // Récupération de l''id par l'url
    $deleteUser->id = $_GET['id'];
    // Appel de la méthode userDelete
    $deleteUserDone = $deleteUser->userDelete();
    header('location: playerList.php');
}

// Modification du role
if (isset($_GET['role'])){
    // Instanciatiation de la classe user
    $modifyRole = new user();
    // Récupération de l'id et du role par l'url
    $modifyRole->id = $_GET['id'];
    $modifyRole->role = $_GET['role'];
    // Appel de la méthode modifyRole
    $modifyRoleDone = $modifyRole->modifyRole();
    header('location: playerList.php');
}
?>

