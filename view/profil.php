<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../model/modelRival.php';
include '../controller/controllerPlayerProfil.php';
include '../view/header.php';
?>
<body>
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="mt-3 col-md-4 offset-md-1 card text-white bg-dark border white-text  text-center font-weight-bold">
                <h1 class="mt-3">Profil</h1>
                <p class="mt-3 text-left">Pseudo : <?= $_SESSION['pseudo'] ?></p>
                <p class="text-left">Email : <?= $_SESSION['email'] ?></p>
                <p class="text-left">Rôle : <?= $_SESSION['role'] ?> </p>
                <div class ="row">
                    <a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="../view/modifyProfil.php?id=<?= $_SESSION['id'] ?>"><i class="fas fa-pencil-alt mr-2"></i>Modifier profil</a>
                    <div class="modal fade right" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                    <a type="button" class="btn grey darken-3 mb-2 col-md-5 text-white"  href="profil.php?id=<?= $_SESSION['id'] ?>&delete=1"><i class="fas fa-trash-alt mr-2"></i>Supprimer</a>
                                    <a type="button" class="btn grey darken-3 mb-2 col-md-5" data-dismiss="modal">Annulé</a>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!-- Central Modal Danger Demo-->
                    <div class="text-center">
                        <a href="" data-toggle="modal" data-target="#ModalDanger" class="btn btn-md btn-primary font-weight-bold col-md-12 ml-5"><i class="fas fa-trash-alt mr-2"></i>Supprimer</a>
                    </div>
                </div>
                <div class ="row">
                    <a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="../view/addScore.php?id=<?= $_SESSION['id'] ?>"><i class="fas fa-plus-square mr-2"></i>Ajouter un score</a>
                    <a href ="../view/BMS.php?scale=1&id=<?= $_SESSION['id'] ?>" class="btn btn-md btn-primary font-weight-bold col-md-5 ml-5"><i class="fas fa-list mr-2"></i>Scores</a>
                </div>
            </div>
            <div class="col-md-4 offset-md-2 mt-3 stylish-color font-title white-text  text-center card border font-weight-bold">
                <h1>Topic/Commentaire</h1>
                <a class="btn btn-md btn-primary font-weight-bold" href="../view/newTopic.php">Crée un topic</a>
            </div>
        </div>
    </div>
</body>
<?php include '../view/footer.php' ?>
