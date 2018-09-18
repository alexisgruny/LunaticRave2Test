<?php include 'controller/controllerForm.php' ?>
<div class="container-fluid">
    <div class="row mt-5 d-flex justify-content-around">
        <form method="POST" class="col-md-5 bg-secondary border border-dark text-center mt-3">
                <label for="pseudo" class="mt-3">Pseudonyme</label>
                <input class="form-control mt-3"  id="pseudo" type="text" name="pseudo" value="<?= isset($pseudo) ? $pseudo : '' ?>" />
                <p class="text-warning"><?= isset($formErrorLogIn['pseudo']) ? $formErrorLogIn['pseudo'] : ''; ?></p>
                <label for="password" class="mt-3">Mot de passe</label>
                <input class="form-control mt-3"  id="password" type="text" name="password" value="<?= isset($password) ? $password : '' ?>" />
                <p class="text-warning"><?= isset($formErrorLogIn['password']) ? $formErrorLogIn['password'] : ''; ?></p>
                <input class="mt-3" type="submit" value="Me connecter"/>
        </form>
    <form method="post" class="col-md-5 bg-secondary border border-dark text-center mt-3">
            <label for="pseudoSignIn">Pseudonyme</label>
                <input class="form-control"  id="pseudoSignIn" type="text" name="pseudoSignIn" value="<?= isset($pseudoSignIn) ? $pseudoSignIn : '' ?>" />
                <p class="text-warning"><?= isset($formErrorSignIn['pseudoSignIn']) ? $formErrorSignIn['pseudoSignIn'] : ''; ?></p>
                <label for="passwordSignIn">Mot de passe</label>
                <input class="form-control"  id="passwordSignIn" type="text" name="passwordSignIn" value="<?= isset($passwordSignIn) ? $passwordSignIn : '' ?>" />
                <p class="text-warning"><?= isset($formErrorSignIn['passwordSignIn']) ? $formErrorSignIn['passwordSignIn'] : ''; ?></p>
                <label for="passwordConfirm">Confirmation mot de passe</label>
                <input class="form-control"  id="passwordConfirm" type="text" name="passwordConfirm" value="<?= isset($passwordConfirm) ? $passwordConfirm : '' ?>" />
                <p class="text-warning"><?= isset($formErrorSignIn['passwordConfirm']) ? $formErrorSignIn['passwordConfirm'] : ''; ?></p>
                <label for="email">E-mail</label>
                <input class="form-control"  id="email" type="text" name="email" value="<?= isset($email) ? $email : '' ?>" />
                <p class="text-warning"><?= isset($formErrorSignIn['email']) ? $formErrorSignIn['email'] : ''; ?></p>
                <input type="submit" value="S'inscrire"/>
    </form>
</div>
</div>
</body>
</html>
