<!-- Include des models, controller et du header -->
<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../model/modelScale.php';
include '../model/modelMusicList.php';
include '../controller/controllerAddMusic.php';
include '../view/header.php';
?>
<!-- Fin des includes -->

<body>
    <div class="container-fluid">
        <!-- Renvois un message si la musique a bien étais ajouté en base -->
        <?php if (isset($_POST['addBms']) && (count($formError) == 0)) { ?>
            <p class="text-center text-white font-weight-bold mt-5">Votre BMS est en attente de validation</p>
            <!-- Sinon renvois un message d'érreur -->
        <?php } else if (isset($_POST['addBms']) && (isset($formError['submit']))) { ?>
            <p> <?= $formError['submit'] ?> </p>
            <!-- Sinon affiche le fomulaire -->
        <?php } else { ?>
            <div class="row mt-5 d-flex justify-content-around">

                <!-- Début du formulaire d'ajout d'une musique -->
                <form method="post" class="col-md-5 bg-dark border card text-center mt-3 white-text">
                    <h2 class="mt-3">Ajouter une BMS</h2>
                    <label for="name">Nom de la BMS</label>
                    <input placeholder="Akasagarbha" class="form-control"  id="name" type="text" name="name" value="<?= isset($newMusic->name) ? $newMusic->name : '' ?>" />
                    <p class="text-warning"><?= isset($formError['name']) ? $formError['name'] : ''; ?></p>
                    <label for="link">Lien LR2 Dream pro</label>
                    <input placeholder="http://www.dream-pro.info/~lavalse/LR2IR/search.cgi?mode=ranking&bmsid=130532" class="form-control"  id="link" type="text" name="link" value="<?= isset($newMusic->link) ? $newMusic->link : '' ?>" />
                    <p class="text-warning"><?= isset($formError['link']) ? $formError['link'] : ''; ?></p>
                    <label for="difficulty">Niveau de difficulté</label>
                    <input placeholder="★1" class="form-control"  id="difficulty" type="number" name="difficulty" value="<?= isset($newMusic->difficulty) ? $newMusic->difficulty : '' ?>" />
                    <p class="text-warning"><?= isset($formError['difficulty']) ? $formError['difficulty'] : ''; ?></p>
                    <label for="maxNote">Nombre maximum de notes</label>
                    <input placeholder="1500" class="form-control"  id="maxNote" type="number" name="maxNote" value="<?= isset($newMusic->maxNote) ? $newMusic->maxNote : '' ?>" />
                    <p class="text-warning"><?= isset($formError['maxNote']) ? $formError['maxNote'] : ''; ?></p>
                    <label for="scaling">Scaling</label>
                    <select class="form-control" name='scaling'>
                        <option selected disabled>Echelle de difficulté</option>
                        <?php foreach ($showScale as $showScale) { ?>
                            <option value='<?= $showScale->id ?>'><?= $showScale->scaleType ?> </option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-primary btn-md mt-4" type="submit" name="addBms">Enregistrer</button>
                </form>
                <!-- Fin du formulaire -->

            <?php } ?>
        </div>
    </div>
</body>
</div>

<!-- Include du footer -->
<?php include '../view/footer.php' ?>

</html>


