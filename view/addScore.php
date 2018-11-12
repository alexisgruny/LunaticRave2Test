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
<body>
    <div class="container-fluid">
        <?php if (isset($_POST['addScore']) && (count($formError) == 0)) { ?>
            <p class="text-center text-white font-weight-bold mt-5">Votre Score a bien étais envoyé</p>
            <!--Sinon affiche le formulaire-->
        <?php } else if (isset($_POST['submit']) && (isset($formError['submit']))) { ?>
            <p> <?= $formError['submit'] ?> </p>  
        <?php } else { ?>
            <div class="row mt-5 d-flex justify-content-around">
                <form method="post" class="col-md-5 bg-dark border border-white text-center mt-3 white-text">
                    <label for="name">music</label>
                    <select class="selectpicker col-md-12" data-show-subtext="true" data-live-search="true" name="music">
                        <option selected disabled > Selectionner une music </option>
                    <?php foreach($music as $music){?>
                        <option value="<?= $music->id?>"><?= $music->name ?></option>
                    <?php } ?>
                    </select>
                    <p class="text-warning"><?= isset($formError['music']) ? $formError['music'] : ''; ?></p>
                    <label for="exScore">ExScore</label>
                    <input class="form-control"  id="exScore" type="text" name="exScore" value="<?= isset($newScore->exScore) ? $newScore->exScore : '' ?>" />
                    <p class="text-warning"><?= isset($formError['exScore']) ? $formError['exScore'] : ''; ?></p>
                    <label for="badpoor">BP (bad/poor)</label>
                    <input class="form-control"  id="badpoor" type="text" name="badpoor" value="<?= isset($newScore->badpoor) ? $newScore->badpoor : '' ?>" />
                    <p class="text-warning"><?= isset($formError['badpoor']) ? $formError['badpoor'] : ''; ?></p>
                    <label for="maxCombo">Max combo</label>
                    <input class="form-control"  id="maxCombo" type="number" name="maxCombo" value="<?= isset($newScore->maxCombo) ? $newScore->maxCombo : '' ?>" />
                    <p class="text-warning"><?= isset($formError['maxCombo']) ? $formError['maxCombo'] : ''; ?></p>
                    <label for="noteHitted">note touché</label>
                    <input class="form-control"  id="noteHitted" type="number" name="noteHitted" value="<?= isset($newScore->noteHitted) ? $newScore->noteHitted : '' ?>" />
                    <p class="text-warning"><?= isset($formError['noteHitted']) ? $formError['noteHitted'] : ''; ?></p>
                    <label for="clearType">Type de clear</label>
                    <select class="col-md-12" data-show-subtext="true" data-live-search="true" name="clearType">
                        <option selected disabled > Selectionner un type de clear </option>
                    <?php foreach($clear as $clear){?>
                        <option value="<?= $clear->id?>"><?= $clear->name ?></option>
                    <?php } ?>
                    </select>
                    <p class="text-warning"><?= isset($formError['clearType']) ? $formError['clearType'] : ''; ?></p>
                    <input class="text-white bg-dark mb-3" type="submit" value="addScore" name="addScore"/>
                </form>
            <?php } ?>
        </div>
    </div>
</body>
</div>
<?php include '../view/footer.php' ?>
