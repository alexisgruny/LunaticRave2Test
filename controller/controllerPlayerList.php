<?php
$showPlayerList = NEW user();
$allPlayer = $showPlayerList->showUser();
if (isset($_GET['delete'])) {
    $deleteUser = NEW user();
    $deleteUser->id = $_GET['id'];
    $deleteUserDone = $deleteUser->userDelete();
    $showPlayerList = NEW user();
    $allPlayer = $showPlayerList->showUser();
}
if (isset($_GET['role'])){
    $modifyRole = new user();
    $modifyRole->id = $_GET['id'];
    $modifyRole->role = $_GET['role'];
    $modifyRoleDone = $modifyRole->modifyRole();
    $showPlayerList = NEW user();
    $allPlayer = $showPlayerList->showUser();
}
?>

