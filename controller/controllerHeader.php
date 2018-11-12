<?php
// Permet de déconnecter 
session_start();
session_destroy();
// redirection sur la page d'accueil
header('location: ../index.php');
exit;
?>
