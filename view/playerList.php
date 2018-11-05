<?php 
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../controller/controllerPlayerList.php';
include '../view/header.php';
?>
<div class="container-fluid">
    <?php foreach($allPlayer as $allPlayer){ ?>
    <a href="playerProfil.php?id=<?=$allPlayer->id?>"><?=$allPlayer->pseudo?></a>
    <?php } ?>
</div>
<?php include '../view/footer.php' ?>

