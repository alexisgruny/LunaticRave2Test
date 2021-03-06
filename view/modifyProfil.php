<!-- Include des models, controller et du header -->
<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../controller/controllerModify.php';
include '../view/header.php';
?>
<!-- FIN -->


<body>
    <!-- Renvois un message si la modification a bien étais ajouté en base -->
    <?php if (isset($_POST['modify']) && (count($formErrorModify) == 0)) { ?>
        <p class="text-center text-white font-weight-bold mt-5">Votre modification a été prise en compte.</p>
        <!-- Sinon affiche un message d'érreur -->
    <?php } else if (isset($_POST['modify']) && (isset($formErrorModify['modify']))) { ?>
        <!-- Sinon affiche le fomulaire -->
        <p> <?= $formErrorModify['modify'] ?> </p>  
    <?php } else { ?>
        <div class="container-fluid">
            <div class="row mt-5 d-flex justify-content-around">
                
                <!-- Formulaire de modification -->
                <form method="post" class="col-md-5 bg-dark border card text-center mt-3 white-text">
                                    <h2 class="mt-3">Modification du profil</h2>
                    <label for="pseudo">Pseudonyme</label>
                    <input placeholder="Pseudo" class="form-control"  id="pseudo" type="text" name="pseudo" value="<?= isset($getPassword->pseudo) ? $getPassword->pseudo : '' ?>" />
                    <p class="text-warning"><?= isset($formErrorModify['pseudo']) ? $formErrorModify['pseudo'] : ''; ?></p>
                    <label for="oldPassword">Ancien mot de passe</label>
                    <input placeholder="Ancien ********" class="form-control"  id="oldPassword" type="password" name="oldPassword" value="<?= isset($getPassword->oldPassword) ? $getPassword->oldPassword : '' ?>" />
                    <p class="text-warning"><?= isset($formErrorModify['oldPassword']) ? $formErrorModify['oldPassword'] : ''; ?></p>
                    <label for="newPassword">Nouveau mot de passe</label>
                    <input placeholder="Nouveau ********" class="form-control"  id="newPassword" type="password" name="newPassword" value="<?= isset($getPassword->newPassword) ? $getPassword->newPassword : '' ?>" />
                    <p class="text-warning"><?= isset($formErrorModify['newPassword']) ? $formErrorModify['newPassword'] : ''; ?></p>
                    <label for="passwordConfirm">Confirmation mot de passe</label>
                    <input placeholder="Confirmer ********" class="form-control"  id="passwordConfirm" type="password" name="passwordConfirm" value="<?= isset($getPassword->passwordConfirm) ? $getPassword->passwordConfirm : '' ?>" />
                    <p class="text-warning"><?= isset($formErrorModify['passwordConfirm']) ? $formErrorModify['passwordConfirm'] : ''; ?></p>
                    <label for="email">E-mail</label>
                    <input placeholder="Email"  class="form-control"  id="email" type="text" name="email" value="<?= isset($getPassword->email) ? $getPassword->email : '' ?>" />
                    <p class="text-warning"><?= isset($formErrorModify['email']) ? $formErrorModify['email'] : ''; ?></p>
                    <button class="btn btn-primary btn-md mt-3" type="submit" name="modify">Modifier</button>
                    <button class="btn btn-primary btn-md mt-3" type="submit" name="back">Annuler</button>                
                </form>
                <!-- Fin du formulaire -->
            <?php } ?>
        </div>
    </div>
</body>

<!-- Include du footer -->
<?php include '../view/footer.php' ?>
