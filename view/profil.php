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
                <ul class="mr-5 pr-2">
                    <li><a class="" href="../view/modifyProfil.php?id=<?= $_SESSION['id'] ?>"><img src="/assets/img/modif.png" style="width: 25px;" /></a></li>
                    <li><div class="modal fade right" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="t`rue">
                                <div class="modal-dialog modal-notify modal-danger modal-side modal-top-right" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header grey">
                                            <p class="heading text-center">Suppression de profil</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-bod bg-dark">
                                            <div class="col-md-12 text-center mt-2">
                                                <p>Etes vous vraiment sur de vouloir supprimer ce profil ?</p>
                                            </div>
                                        </div>

                                        <!--Footer-->
                                        <div class="justify-content-center bg-dark">
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-5 text-white"  href="playerList.php?id=<?= $_SESSION['id'] ?>&delete=1">Supprimer</a>
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-5" data-dismiss="modal">Annulé</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Central Modal Danger Demo-->

                            <div class="text-center">
                                <a href="" data-toggle="modal" data-target="#ModalDanger"><img src="/assets/img/delete.png" style="width: 25px;" /></a>
                            </div></li>
                            <li><a class="" href="../view/addScore.php?id=<?= $_SESSION['id'] ?>"><img src="/assets/img/add.png" style="width: 25px;" /></a></li>
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
