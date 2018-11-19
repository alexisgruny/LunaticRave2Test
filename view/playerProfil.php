<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../model/modelRival.php';
include '../controller/controllerPlayerProfil.php';
include '../view/header.php'
?>
<body onload="footerToggle()">
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3 col-md-4 text-white bg-dark border text-center font-weight-bold">
                <h1 class="mt-3">Profil</h1>
                <p class="mt-3 text-left">Pseudo : <?= $getUser->pseudo ?></p>
                <p class="mt-3 text-left">Rôle : <?= $getUser->name ?><p>
                    <?php if (isset($showRival->isAccept)) { ?>
                <td><a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="playerProfil.php?id=<?= $getUser->id ?>&deleteRival=1">Enlever rival</a></td>
                <?php } else { ?>
                    <a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="../view/playerProfil.php?rival=1&id=<?= $getUser->id ?>"><i class="fas fa-list mr-2"></i>Ajouter rival</a>
                <?php } ?>
                <a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="../view/BMS.php?scale=1&id=<?= $getUser->id ?>"><i class="fas fa-list mr-2"></i>Scores</a>
            </div>
            <div class="col-md-4 offset-md-4 mt-3 stylish-color font-title white-text  text-center border border-white font-weight-bold">
                <h1 class="mt-3">Topic/Commentaires</h1>
            </div>
        </div>
</body>
<?php include '../view/footer.php' ?>