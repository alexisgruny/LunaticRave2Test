<!-- Include des models, du controller et du header 
<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../model/modelRival.php';
include '../controller/controllerFriendsRival.php';
include '../view/header.php'
?>
<!-- Fin -->

<body>
    <table class="table table-striped table-dark text-center white-text col-md-12 text-white border">
            <h2 class="text-cyan text-center mt-5">Liste des Rivaux</h2>
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Liste de score</th>
                    <th>retirer</th>
                </tr>
            </thead>
            <tbody
            <?php foreach ($showRival as $Rival) { ?>
                    <tr>
                        <td><a class="text-white" href="playerProfil.php?id=<?= $Rival->id ?>"><?= $Rival->pseudo ?></a></td>
                        <td><a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="BMS.php?scale=1&id=<?= $Rival->id ?>"><i class="fas fa-list mr-2"></i>Scores</a></td>
                        <td><a class="btn btn-md btn-primary font-weight-bold col-md-5 ml-2" href="friendsRival.php?id=<?= $Rival->idRival ?>&delete=1">Retirer</a></td>
                    </tr>
                    <?php } ?>
        </tbody>
    </table>
</body>

<!-- Include du footer -->
<?php include '../view/footer.php' ?>
