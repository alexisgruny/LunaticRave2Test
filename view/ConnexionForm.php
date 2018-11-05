<?php 
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../controller/controllerForm.php';
include '../view/header.php' ;
?>
<div class="container-fluid">
    <?php if (isset($_POST['signIn']) && (count($formErrorSignIn) == 0)) { ?>
                <p class="text-center text-white font-weight-bold mt-5">Votre formulaire a bien étais envoyé</p>
                <!--Sinon affiche le formulaire-->
            <?php } else if (isset($_POST['submit']) && (isset($formErrorSignIn['submit']))) { ?>
                <p> <?= $formErrorSignIn['submit'] ?> </p>  
        <?php }else { ?>
    <div class="row mt-5 d-flex justify-content-around">
        <form method="POST" class="col-md-5 bg-dark border border-white text-center mt-3 white-text">
            <label for="pseudo" class="mt-3">Pseudonyme</label>
            <input class="form-control mt-3"  id="pseudo" type="text" name="pseudo" value="<?= isset($pseudo) ? $pseudo : '' ?>" />
            <p class="text-warning"><?= isset($formErrorConnect['pseudo']) ? $formErrorConnect['pseudo'] : ''; ?></p>
            <label for="password" class="mt-3">Mot de passe</label>
            <input class="form-control mt-3"  id="password" type="password" name="password" value="<?= isset($password) ? $password : '' ?>" />
            <p class="text-warning"><?= isset($formErrorConnect['password']) ? $formErrorConnect['password'] : ''; ?></p>
            <input class="mt-3 text-white bg-dark mb-3" type="submit" value="Me connecter" name="logIn"/>
            <P><?= isset($message)? $message : '' ?></p>
        </form>
        <form method="post" class="col-md-5 bg-dark border border-white text-center mt-3 white-text">
            <label for="pseudoSignIn">Pseudonyme</label>
            <input class="form-control"  id="pseudoSignIn" type="text" name="pseudoSignIn" value="<?= isset($newUser->pseudoSignIn) ? $newUser->pseudoSignIn : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['pseudoSignIn']) ? $formErrorSignIn['pseudoSignIn'] : ''; ?></p>
            <label for="passwordSignIn">Mot de passe</label>
            <input class="form-control"  id="passwordSignIn" type="password" name="passwordSignIn" value="<?= isset($newUser->passwordSignIn) ? $newUser->passwordSignIn : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['passwordSignIn']) ? $formErrorSignIn['passwordSignIn'] : ''; ?></p>
            <label for="passwordConfirm">Confirmation mot de passe</label>
            <input class="form-control"  id="passwordConfirm" type="password" name="passwordConfirm" value="<?= isset($newUser->passwordConfirm) ? $newUser->passwordConfirm : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['passwordConfirm']) ? $formErrorSignIn['passwordConfirm'] : ''; ?></p>
            <label for="email">E-mail</label>
            <input class="form-control"  id="email" type="text" name="email" value="<?= isset($newUser->email) ? $newUser->email : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['email']) ? $formErrorSignIn['email'] : ''; ?></p>
            <input class="text-white bg-dark mb-3" type="submit" value="S'inscrire" name="signIn"/>
        </form>
        <?php } ?>
    </div>
</div>
</body>
<?php include '../view/footer.php' ?>
</html>
