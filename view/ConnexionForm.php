<!-- Include des models, controller et du header -->
<?php 
session_start();
include '../model/modelDatabase.php';
include '../model/modelUser.php';
include '../controller/controllerForm.php';
include '../view/header.php' ;
?>
<!-- Fin des includes -->

<div class="container-fluid">
    
    <!-- Si aucune érreur , afficher un message de succée a l'utilisateur -->
    <?php if (isset($_POST['signIn']) && (count($formErrorSignIn) == 0)) { ?>
                <p class="text-center text-white font-weight-bold mt-5">Votre formulaire a bien étais envoyé</p>
                
                <!--Sinon affiche un message d'érreur-->
            <?php } else if (isset($_POST['signIn']) && (isset($formErrorSignIn['signIn']))) { ?>
                <p> <?= $formErrorSignIn['signIn'] ?> </p> 
                
                <!-- si aucun des 2 afficher le formulaire -->
        <?php }else { ?>
    <div class="row mt-5 d-flex justify-content-around">
        
        <!-- Formulaire de connexion -->
        <form method="POST" class="col-md-5 bg-dark card border text-center mt-3 white-text">
            <h1 class="mt-3"> Connexion </h1>
            
            <!-- Pseudonyme -->
            <i class="fa fa-user prefix, mt-3"></i>
            <label for="pseudo" class="mt-3">Pseudonyme</label>
            <input class="mt-3"  placeholder="Pseudo" id="pseudo" type="text" name="pseudo" value="<?= isset($pseudo) ? $pseudo : '' ?>" />
            <p class="text-warning"><?= isset($formErrorConnect['pseudo']) ? $formErrorConnect['pseudo'] : ''; ?></p>
            
            <!-- Password -->
            <i class="fa fa-lock prefix mt-3"></i>
            <label for="password" class="mt-3">Mot de passe</label>
            <input class="mt-3"  placeholder="********" id="password" type="password" name="password" value="<?= isset($password) ? $password : '' ?>" />
            <p class="text-warning"><?= isset($formErrorConnect['password']) ? $formErrorConnect['password'] : ''; ?></p>
            
            <!-- Input Submit -->
            <button class="btn btn-primary btn-md mt-5" type="submit" name="logIn">Se connecter</button>
            <P><?= isset($message)? $message : '' ?></p>
        </form>
        <!-- Fin du formulaire de connexion -->
        
        <!-- Formulaire d'inscription-->
        <form method="post" class="col-md-5 bg-dark card border text-center mt-3 white-text">
            <h1 class="mt-3">Inscription </h1>
            
            <!-- Pseudo -->
            <label for="pseudoSignIn">Pseudonyme</label>
            <input  placeholder="Pseudo" id="pseudoSignIn" type="text" name="pseudoSignIn" value="<?= isset($newUser->pseudoSignIn) ? $newUser->pseudoSignIn : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['pseudoSignIn']) ? $formErrorSignIn['pseudoSignIn'] : ''; ?></p>
            
            <!-- Password -->
            <label for="passwordSignIn">Mot de passe</label>
            <input placeholder="********" id="passwordSignIn" type="password" name="passwordSignIn" value="<?= isset($newUser->passwordSignIn) ? $newUser->passwordSignIn : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['passwordSignIn']) ? $formErrorSignIn['passwordSignIn'] : ''; ?></p>
            
            <!-- PasswordConfirm -->
            <label for="passwordConfirm">Confirmation mot de passe</label>
            <input  placeholder="********" id="passwordConfirm" type="password" name="passwordConfirm" value="<?= isset($newUser->passwordConfirm) ? $newUser->passwordConfirm : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['passwordConfirm']) ? $formErrorSignIn['passwordConfirm'] : ''; ?></p>
            
            <!-- Email -->
            <label for="email">E-mail</label>
            <input placeholder="Something@else.kek" id="email" type="text" name="email" value="<?= isset($newUser->email) ? $newUser->email : '' ?>" />
            <p class="text-warning"><?= isset($formErrorSignIn['email']) ? $formErrorSignIn['email'] : ''; ?></p>
            
            <!-- Submit -->
            <button class="btn btn-primary btn-md" type="submit" name="signIn">S'inscrire</button>
        </form>
        <!-- Fin du formulaire d'inscription -->
        
        <?php } ?>
    </div>
</div>
</body>

<!-- Include du footer -->
<?php include '../view/footer.php' ?>

</html>
