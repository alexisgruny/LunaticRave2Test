<!-- Démarrage de la session et include du header -->
<?php 
session_start();
include '../view/header.php' ;
?>
<!-- FIN -->

<!-- Text : Comment Télécherger LR2 -->
<div class="container-fluid">
    <div class="bg-dark offset-md-1 col-md-10 card border mt-5 font-text">
        <div class="text-center font-text mt-5 text-white  ">
            <h1 class="font-weight-bold blue-text">TÉLÉCHARGEMENT</h1>

            <p>Télécharger le jeu avec le lien ci-dessous, cépendant, ne surtout pas l'extraire tout de suite. <br />
                ---> <a href="http://www.dream-pro.info/~lavalse/LR2_100201.zip"> LR2 lien</a> <--- <br />

                <span class="text-danger">Avant de continuer, vous êtes fortement recommandé de changer votre ordinateur en locale Japanese. Ne pas le faire va mal installer le jeu.
                    Vous n'êtes pas obligés de revenir à votre locale original après modification.</span></p>


            <h2 class="font-weight-bold blue-text">Configurer le jeu</h2>

            <p>Une fois le contenu extrait, lancez "LR2.exe" <br />(Attention, si vous n'êtes plus en Japanese Locale, vous aurez besoin de lancer le jeu en Japanese Applocale, sur Windows10 je vous conseille<span class="text-danger"> Locale Emulator </span>. La meilleure chose à faire étant de TOUJOURS lancer le jeu en Applocale japanese et en administrateur.)</p>

            <img class="col-md-8" src="http://echo.s-ul.eu/HFcq2EEy.png" />

            <p class="mt-5">Vous aurez alors cette fenêtre.<br />
                Il suffit de créer votre profil en mettant dans la case ID votre pseudo (attention il ne doit pas être trop long) et votre mot de passe en dessous. <br />(Si vous êtes un ancien joueur, vous pouvez cocher la case et mettre votre ID, soyez sûrs que le mot de passe correspond!)
                <span class="text-danger">Cliquez "OK".</span></p>

            <img class="col-md-10" src="http://puu.sh/AMQKb/12aa35597f.png" />

            <p class="mt-5">Vous arriverez à cette fenêtre, changez le language en haut pour English pour être plus à l'aise.
                Le jeu va alors vous dire d'ajouter des musiques dans le JUKEBOX. <br /> Vous trouverez des starter packs sur cette page : <a href="http://news.keysounds.net/starterpacks"> Lien BMS </a> <br /> (Ce sont des .exe à extraire dans un dossier où vous stockerez toutes vos BMS)</p>

            <h3 class="font-weight-bold blue-text">Ajouter des BMS</h3>

            <p> Il suffit de glisser le dossier dans le Jukebox</p>

            <img class="col-md-10" src="http://echo.s-ul.eu/BlprW7ku.gif" />

            <p>Lorsque vous ajoutez un dossier plus gros, cela peu prendre un peu plus de temps. Ayez un peu de patience si le jeu ne réponds plus. <br />
                Si glisser le dossier ne fonctionne pas, cliquez sur "Add", vous pourrez ainsi le rechercher et le sélectionner.<br />
                Pour supprimer un dossier du JUKEBOX, faites un clic droit dessus et cliquez sur l'avant-dernier choix.</p>

            <p class="text-danger">Le launcher de LR2 a un large choix d'options personnalisables. Voici des explications pour tout ce que vous pouvez faire avant de lancer le jeu, onglet par onglet.</p>
        </div>
    </div>
</div>
</body>
<!-- FIN -->

<!-- Include du footer -->
<?php include '../view/footer.php' ?>
</html>