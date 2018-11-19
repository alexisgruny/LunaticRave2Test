<!-- Include des models, controller et du header -->
<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../controller/controllerPlayerList.php';
include '../view/header.php';
?>
<!-- FIN -->

<div class="container-fluid">

    <!-- Vérification des roles , pour afficher une page différente selon le role -->
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'Administrateur') { ?>

        <!-- Affichage pour un Administrateur -->
        <table class="table table-striped table-dark text-center white-text col-md-12 border">
            <h2 class="white-text text-center mt-3">Liste des joueurs</h2>

            <!-- En-tête -->
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Rôle</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>

            <!-- Corps -->
            <tbody>
                <?php foreach ($allPlayer as $allPlayer) { ?>
                    <tr>
                        <td><a class="text-white" href="playerProfil.php?id=<?= $allPlayer->id ?>"><?= $allPlayer->pseudo ?></a></td>
                        <td><p><?= $allPlayer->name ?></p></td>

                        <!-- modal de modification de rôle-->
                        <td>
                            <div class="modal fade right" id="ModalRole<?= $allPlayer->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="t`rue">
                                <div class="modal-dialog modal-notify modal-danger modal-side modal-top-right" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header grey">
                                            <p class="heading text-center">Modification du rôle de  <?= $allPlayer->pseudo ?></p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>
                                        <!--Body-->
                                        <div class="modal-bod bg-dark">
                                            <div class="col-md-12 text-center mt-2">
                                                <p>Quel rôle voulez-vous donner ?</p>
                                            </div>
                                        </div>
                                        <!--Footer-->
                                        <div class="justify-content-center bg-dark">
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-12 text-white"  href="playerList.php?id=<?= $allPlayer->id ?>&role=1">Utilisateur</a>
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-12 text-white"  href="playerList.php?id=<?= $allPlayer->id ?>&role=2">Modérateur</a>
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-12 text-white"  href="playerList.php?id=<?= $allPlayer->id ?>&role=3">Administrateur</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Central Modal Danger -->
                            <div class="text-center">
                                <a href="" data-toggle="modal" data-target="#ModalRole<?= $allPlayer->id?>"><img src="/assets/img/modif.png" style="width: 25px;" /></a>
                            </div>
                        </td>
                        <!-- Fin de modal de modification -->

                        <!-- modal de suppresion d'utilisateur -->
                        <td>
                            <div class="modal fade right" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="t`rue">
                                <div class="modal-dialog modal-notify modal-danger modal-side modal-top-right" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header grey">
                                            <p class="heading text-center">Supprimer <?= $allPlayer->pseudo ?></p>

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
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-5 text-white"  href="playerList.php?id=<?= $allPlayer->id ?>&delete=1">Supprimer</a>
                                            <a type="button" class="btn grey darken-3 mb-2 col-md-5" data-dismiss="modal">Annulé</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Central Modal Danger -->
                            <div class="text-center">
                                <a href="" data-toggle="modal" data-target="#ModalDanger"><img src="/assets/img/delete.png" style="width: 25px;" /></a>
                            </div></td>
                        <!-- Fin de modal de supression -->

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>

        <!-- Affichage pour un utilisateur lambda -->
        <table class="table table-striped table-dark text-center white-text col-md-12 text-white border">
            <h2 class="text-cyan text-center mt-5">Liste des joueurs</h2>
            <thead>
                <tr>
                    <th>Pseudo</th>
                </tr>
            </thead>
            <tbody
            <?php foreach ($allPlayer as $allPlayer) { ?>
                    <tr>
                        <td><a class="text-white" href="playerProfil.php?id=<?= $allPlayer->id ?>"><?= $allPlayer->pseudo ?></a></td>
                        <td><a class="text-white" href="BMS.php?id=<?= $allPlayer->id ?>">Scores</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
    <!-- FIN -->

</div>

<!-- Include du footer -->
<?php include '../view/footer.php' ?>

