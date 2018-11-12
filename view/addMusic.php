<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../model/modelScale.php';
include '../model/modelMusicList.php';
include '../controller/controllerAddMusic.php';
include '../view/header.php';
?>
<body>
    <div class="container-fluid">
        <?php if (isset($_POST['addBms']) && (count($formError) == 0)) { ?>
            <p class="text-center text-white font-weight-bold mt-5">Votre BMS est en cours d'enregistrement</p>
            <!--Sinon affiche le formulaire-->
        <?php } else if (isset($_POST['addBms']) && (isset($formError['submit']))) { ?>
            <p> <?= $formError['submit'] ?> </p>  
        <?php } else { ?>
            <div class="row mt-5 d-flex justify-content-around">
                <form method="post" class="col-md-5 bg-dark border border-white text-center mt-3 white-text">
                    <label for="name">Nom de la BMS</label>
                    <input class="form-control"  id="name" type="text" name="name" value="<?= isset($newMusic->name) ? $newMusic->name : '' ?>" />
                    <p class="text-warning"><?= isset($formError['name']) ? $formError['name'] : ''; ?></p>
                    <label for="link">Lien LR2 Dream pro</label>
                    <input class="form-control"  id="link" type="text" name="link" value="<?= isset($newMusic->link) ? $newMusic->link : '' ?>" />
                    <p class="text-warning"><?= isset($formError['link']) ? $formError['link'] : ''; ?></p>
                    <label for="difficulty">Niveau de difficulté</label>
                    <input class="form-control"  id="difficulty" type="number" name="difficulty" value="<?= isset($newMusic->difficulty) ? $newMusic->difficulty : '' ?>" />
                    <p class="text-warning"><?= isset($formError['difficulty']) ? $formError['difficulty'] : ''; ?></p>
                    <label for="maxNote">Nombre maximum de notes</label>
                    <input class="form-control"  id="maxNote" type="number" name="maxNote" value="<?= isset($newMusic->maxNote) ? $newMusic->maxNote : '' ?>" />
                    <p class="text-warning"><?= isset($formError['maxNote']) ? $formError['maxNote'] : ''; ?></p>
                    <label for="scaling">Scaling</label>
                    <select class="form-control" name='scaling'>
                        <option></option>
                        <?php foreach($showScale as $showScale){ ?>
                        <option value='<?= $showScale->id ?>'><?= $showScale->scaleType ?> </option>
                        <?php } ?>
                    </select>
                    <input class="text-white bg-dark mt-3 mb-3" type="submit" value="ajouter" name="addBms"/>
                </form>
            <?php } ?>
        </div>
    </div>
</body>
</div>
<?php include '../view/footer.php' ?>


