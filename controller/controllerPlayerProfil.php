<?php
$showUser = NEW user();
$showUser->id = $_GET['id'];
$getUser = $showUser->userById();
?>
