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
                <p class="mt-3"><?= $getUser->pseudo ?></p>
                <p><?= $getUser->name ?><p>
                    <a href ="../view/BMS.php?scale=1&id=<?= $getUser->id ?>">Scores</a>
            </div>
            <div class="col-md-4 offset-md-4 mt-3 stylish-color font-title white-text  text-center border border-white font-weight-bold">
                <p>Topic/Commentaire</p>
            </div>
        </div>
</body>
<?php include '../view/footer.php' ?>