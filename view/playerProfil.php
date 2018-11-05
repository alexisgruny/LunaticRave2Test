<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../controller/controllerPlayerProfil.php';
include '../view/header.php'
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3 col-md-4 text-white bg-dark border border-white white-text  text-center font-weight-bold">
                <p class="mt-3">Profil de <?= $getUser->pseudo ?></p>
                <p><?= ROLE ?><p>
                <?php if($_SESSION['role'] == 3){ ?>
                <a class="mb-3" href="../view/modifyProfil.php?id=<?= $_SESSION['id'] ?>"><input type="button" class="bg-dark text-white mb-3 col-md-10 offset-md-1 text-center" value="Modérateur"></a>
                <?php } ?>
            </div>
            <div class="col-md-4 offset-md-4 mt-3 stylish-color font-title white-text  text-center border border-white font-weight-bold">
                <p>Topic/Commentaire</p>
            </div>
        </div>
        <div class="col-md-10 offset-md-1 mt-3 stylish-color font-title white-text  text-center border border-white font-weight-bold">
            <p>DERNIER SCORE</p>
        </div>
</body>
<?php include '../view/footer.php' ?>