<!-- Include des models, controller et du header -->
<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelScores.php';
include '../model/modelUser.php';
include '../model/modelMusicList.php';
include '../model/modelClearType.php';
include '../controller/controllerAddScore.php';
include '../view/header.php';
?>
<!-- Fin des includes -->

<body>
    <div class="container-fluid">
        <!-- Renvois un message si la musique a bien étais ajouté en base -->
        <?php if (isset($_POST['addScore']) && (count($formError) == 0)) { ?>
            <p class="text-center text-white font-weight-bold mt-5">Votre Score a bien été envoyé</p>
            <!--Sinon affiche un méssage d'érreur-->
        <?php } else if (isset($_POST['submit']) && (isset($formError['submit']))) { ?>
            <p> <?= $formError['submit'] ?> </p>
            <!-- Sinon affiche le fomulaire -->
        <?php } else { ?>
            
            <div class="row mt-5 d-flex justify-content-around">
                
                <!-- Formulaire d'ajout de score -->
                <form method="post" class="col-md-5 bg-dark border card text-center mt-3 white-text">
                    <h2 class="mt-3">Ajouter un score</h2>
                    <label for="name">Music</label>
                    <select class="selectpicker col-md-12" data-show-subtext="true" data-live-search="true" name="music">
                        <option selected disabled > Sélectionner une musique </option>
                    <?php foreach($music as $music){?>
                        <option value="<?= $music->id?>"><?= $music->name ?></option>
                    <?php } ?>
                    </select>
                    <p class="text-warning"><?= isset($formError['music']) ? $formError['music'] : ''; ?></p>
                    <label for="exScore">ExScore</label>
                    <input placeholder="3000" class="form-control"  id="exScore" type="number" name="exScore" value="<?= isset($newScore->exScore) ? $newScore->exScore : '' ?>" />
                    <p class="text-warning"><?= isset($formError['exScore']) ? $formError['exScore'] : ''; ?></p>
                    <label for="badpoor">BP (bad/poor)</label>
                    <input placeholder="0" class="form-control"  id="badpoor" type="number" name="badpoor" value="<?= isset($newScore->badpoor) ? $newScore->badpoor : '' ?>" />
                    <p class="text-warning"><?= isset($formError['badpoor']) ? $formError['badpoor'] : ''; ?></p>
                    <label for="maxCombo">Max combo</label>
                    <input placeholder="1500" class="form-control"  id="maxCombo" type="number" name="maxCombo" value="<?= isset($newScore->maxCombo) ? $newScore->maxCombo : '' ?>" />
                    <p class="text-warning"><?= isset($formError['maxCombo']) ? $formError['maxCombo'] : ''; ?></p>
                    <label for="noteHitted">Hitted note</label>
                    <input placeholder="1500" class="form-control"  id="noteHitted" type="number" name="noteHitted" value="<?= isset($newScore->noteHitted) ? $newScore->noteHitted : '' ?>" />
                    <p class="text-warning"><?= isset($formError['noteHitted']) ? $formError['noteHitted'] : ''; ?></p>
                    <label for="clearType">Type de clear</label>
                    <select class="col-md-12" data-show-subtext="true" data-live-search="true" name="clearType">
                        <option selected disabled > Sélectionner un type de clear </option>
                    <?php foreach($clear as $clear){?>
                        <option value="<?= $clear->id?>"><?= $clear->name ?></option>
                    <?php } ?>
                    </select>
                    <p class="text-warning"><?= isset($formError['clearType']) ? $formError['clearType'] : ''; ?></p>
                    <button class="btn btn-primary btn-md mt-4" type="submit" name="addScore">Enregistrer</button>
                </form>
                <!-- Fin du formulaire -->
                
            <?php } ?>
        </div>
    </div>
</body>
</div>

<!-- include du footer -->
<?php include '../view/footer.php' ?>

</html>
