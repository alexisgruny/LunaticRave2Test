<!DOCTYPE html>
<html lang="fr" />
<head>
    <meta charset="CHARSET=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lunatic Rave 2 France</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet" />
        <!-- Police -->
        <link href="https://fonts.googleapis.com/css?family=Mirza|Slabo+27px" rel="stylesheet">
        <!-- select -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
        <!-- Style personnalisé -->
        <link rel="stylesheet" href="/assets/css/style.css" />
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
        <!-- select JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
        <!-- Script personalisé -->
        <script type="text/javascript" src="../assets/js/script.js"></script>
        
<div class="container-fluid">
    
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  font-title font-weight-bold">
        
        <!-- Bouton d'accueil -->
        <a class="text-blue mt-1 mr-5"href="../index.php">LunaticRave 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Nav Secondaire -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <!-- Dropdown wiki/aide -->
                <li class="nav-item dropdown">
                    <a class="mt-1 nav-link dropdown-toggle mt-1 mr-5 " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wiki/Aide
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="/view/download.php">Téléchargement</a>
                        <a class="dropdown-item text-muted" href="/view/terminologie.php">Terminologie</a>
                        <a class="dropdown-item text-muted" href="/view/config.php">Configuration</a>
                    </div>
                </li>
                
                <!-- Si connecté , affiche dropdown score -->
                 <?php if(isset($_SESSION['isConnect'])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-1 mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Scores
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=1&id=<?= $_SESSION['id'] ?>">☆ Normal</a>
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=2&id=<?= $_SESSION['id'] ?>">○ Normal N°2</a>
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=3&id=<?= $_SESSION['id'] ?>">★ Insane</a>
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=4&id=<?= $_SESSION['id'] ?>">▼ Insane N°2</a>
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=5&id=<?= $_SESSION['id'] ?>">◆ Longue note</a>
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=6&id=<?= $_SESSION['id'] ?>">★★ Overjoy</a>
                        <a class="dropdown-item text-muted" href="../view/BMS.php?scale=7&id=<?= $_SESSION['id'] ?>">◆◆ Overoy longue note</a>
                    </div>
                    <?php } ?>
                </li>
                
                <!-- Dropdown communauté -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-1 mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Communauté
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="../view/forum.php">Forum</a>
                        <a class="dropdown-item text-muted" href="../view/playerList.php">Liste des joueurs</a>
                    </div>
                </li>
                
                <!-- si connecté , affiche dropdown des options du joueur -->
                <?php if(isset($_SESSION['pseudo'])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-1 mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['pseudo']?>
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="../view/addScore.php?id=<?=$_SESSION['id']?>">Ajout de score</a>
                        <a class="dropdown-item text-muted" href="../view/addMusic.php">Ajout d'une BMS</a>
                        <a class="dropdown-item text-muted" href="../view/newNews.php">Crée une news</a>
                        <a class="dropdown-item text-muted" href="../view/friendsRival.php">Rival/Amis</a>
                        <a class="dropdown-item text-muted" href="../view/profil.php?id=<?=$_SESSION['id']?>">Profil</a>
                    </div>
                </li>
                <?php } ?>
                
                <!-- Bouton connexion/inscription , si connecté affiche un bouton déconnexion -->
                <li class="nav-item">
                    <?php if(isset($_SESSION['isConnect']) == true){ ?>
                    <a class="nav-link mt-1 mr-5" href="../controller/controllerHeader.php">Déconnexion</a>
                    <?php } else { ?>
                    <a class="nav-link mt-1 mr-5" href="/view/ConnexionForm.php">Connexion/Inscription</a>
                    <?php } ?>
                </li>
                
            </ul>
        </div>
    </nav>
</div>
</head>
