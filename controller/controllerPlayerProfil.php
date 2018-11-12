<?php
// Instanciation de la classe user
$showUser = NEW user();
// Récupération de l'id par l'url
$showUser->id = $_GET['id'];
// Appel de la méthode userById
$getUser = $showUser->userById();
?>
