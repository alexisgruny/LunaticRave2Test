<?php
session_start();
include('../view/header.php');
?>
<body>
    <div class="container-fluid">
        <div class="bg-dark offset-md-2 col-md-8 border-dark card mt-5 font-text">
            <div class="text-center font-text mt-5 text-white ">
                <h1 class="font-weight-bold blue-text">MAIN</h1>

                <p>Le plupart des options sont compréhensibles. <br />
                    Song reload types are in case you update your song folders by adding new songs to already indexed folders. Default is Auto Reload Type 2</p>

                <p>Si vous voulez sauvegarder vos scores en ligne, vous devez cocher la case "LR2 InternetRanking". Les cases en dessous sont pour les rivaux, si vous voulez comparer vos scores avec vos rivaux, cochez-les!</p>

                <h2 class="font-weight-bold blue-text">JUKEBOX2</h2>

                <p>Ces options sont pour créer des dossiers "custom".</p>

                <ul class="text-left">
                    <li>RANDOM SELECT: Sélectionne une chart random
                    <li>FAVORITE FOLDER: Créer un dossier qui contient les BMS marquées comme favorites.
                    <li>IGNORE FOLDER: Créer un dossier qui contient les BMS marquées avec IGNORE.
                    <li>PLAYCOUNT TOP 10 FOLDER: Créer un dossier qui contient les 10 BMS que vous avez les plus jouées.
                    <li>CLEAR FOLDER: Créer un dossier où seront rangés vos BMS clear (Dossier HARD, ect..)
                    <li>PLAYRANK FOLDER: A folder where you sort songs by your PLAYRANK, aka DJ RANK or GRADE.
                    <li>発狂BMS FOLDER: Dossier Insane BMS. Les BMS seront rangées par niveaux d'insane (1 à 24). Requiers LR2 InternetRanking de coché.</li>
                </ul>

                Vous pouvez également choisir le nombre maximum de résultats lorsque vous ferez une recherche en jeu, et aussi choisir pendant combien de temps une BMS sera marquée comme "NEW"

                <h3 class="font-weight-bold blue-text">OPTION</h3>
                <ul class="text-left">
                    <li>HI-SPEED: Fixez la plus petite et la plus haute hi-speed (scroll speed) et fixez avec quelle marge ça s'ajuste quand vous la changez en jeu.
                    <li>Vous pouvez ajuster la hi-speed de base (x1 speed modifier)
                    <li>Vous pouvez aussi modifier la marge lorsque vous ajustez la lane cover. 
                    <li>Miss BGA: Combien de temps reste le miss bga lorsque vous ratez une note.
                    <li>Minimum input interval & Music list: Ajuste combien de temps le jeu va prendre pour scroll à la prochaine sélection. (en restant sur la touche appuyée)
                    <li>User font: Vous pouvez choisir une autre police, mais beaucoup de chances que le jeu crash. (déconseillé)
                    <li>PM Controller: Force le mode 9keys. Et change aussi le menu en façon pop’n. Utile pour les joueurs controllers.
                    <li>Assign 1/3 to scroll: Key 1 et Key 3 vous permet de scroll dans le menu de sélections.
                    <li>Output system log: Makes the game output log file. Might be helpful if your game consistently crashes when doing something specific.
                    <li>Disable parallel loading: ??? (décochez)
                    <li>Disable right click exit: Clic droit ne vous fera pas quitter la sélection/la bms/le jeu.
                    <li>Folder lamp: Active le clear lamp pour chaque dossier basé sur le type de clear des musiques dans les dossiers. Activates the clear lamp for each folder based on clear types of songs within each folder.
                    <li>Disable system keys: Les touches systèmes seront désactivées en jeu. (genre la touche windows)
                    <li>Disable skin preview: Désactive la preview du skin. (dans la sélection du skin)
                    <li>Regist gave up score to IR: Indisponible.
                    <li>Assign up/down key to hs change: Touches haut et bas changeront la hi-speed.
                </ul>

                <h4 class="font-weight-bold blue-text">SYSTEM</h4>
                <ul class="text-left">
                    <li>16bit color: Si vous utilisez LR2 sur un très vieux ordinateur.
                    <li>Wait for vsync: Active la vsync. Le jeu sera cappé à 60fps, mais cela va causer de l’input lag.
                    <li>Multi-monitor settings: Vous pouvez choisir sur quel écran le jeu se lance. Les options sont “Main”, “Sub1”, et “Sub2”. (Utilisez juste main)
                    <li>Software Rendering: ????
                    <li>OUTPUT TYPE: Choisissez les drivers désirés.
                    <li>Buffer size: ???? 384 par défaut
                    <li>Disable FMOD Ex soundsystem: Système son alternatif. Peut réparer certains bugs de sons sur des BMS, mais aussi en faire crash d’autres.
                    <li>Use high performance timer: (not recommended).
                </ul>

                <p>Changer le Play options ingame directement dans le launcher <br />
                    Vous pouvez changer le play option ingame en cliquant sur le bouton à côté de "Play"</p>

                <img class="col-md-10" src="http://echo.s-ul.eu/buNfzRYh.gif" />
            </div>
        </div>
    </div>
</body>
<?php include '../view/footer.php' ?>
</html>

