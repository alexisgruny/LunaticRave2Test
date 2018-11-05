<?php
session_start();
include '../view/header.php'
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3 col-md-4 text-white bg-dark border border-white white-text  text-center font-weight-bold">
                <p>Profil</p>
                <p class="mt-3">Pseudo : <?= $_SESSION['pseudo'] ?></p>
                <p>Email : <?= $_SESSION['email'] ?></p>
                <p><?= $_SESSION['role'] ?> </p>
                <a class="" href="../view/modifyProfil.php?id=<?= $_SESSION['id'] ?>"><input type="button" class="bg-dark text-white mb-2 col-md-8 text-center" value="modifier"></a>
                <a class=""href="../view/addScore.php?id=<?= $_SESSION['id'] ?>"><input type="button" class="bg-dark text-white mb-2 col-md-8 text-center" value="Ajout score"></a>
            </div>
            <div class="col-md-4 offset-md-4 mt-3 stylish-color font-title white-text  text-center border border-white font-weight-bold">
                <p>Topic/Commentaire</p>
                <a class="" href="../view/newTopic.php"><input type="button" class="bg-dark text-white mb-2 col-md-8 text-center" value="Nouveau topic"></a>
            </div>
        </div>
        <div class="col-md-10 offset-md-1 mt-3 stylish-color font-title white-text  text-center border border-white font-weight-bold">
            <p>DERNIER SCORE</p>
        </div>

    </div>
</body>
<?php include '../view/footer.php' ?>
