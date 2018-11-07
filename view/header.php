<!DOCTYPE html>
<html lang="fr" />
<head>
    <meta charset="CHARSET=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lunatic Rave 2 France</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  font-title font-weight-bold">
        <a class="text-blue mt-1 mr-5"href="../index.php">LunaticRave 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-1 mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BMS
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="#">☆ Normal</a>
                        <a class="dropdown-item text-muted" href="#">○ normal N°2</a>
                        <a class="dropdown-item text-muted" href="#">★ Insane</a>
                        <a class="dropdown-item text-muted" href="#">▼ Insane N°2</a>
                        <a class="dropdown-item text-muted" href="#">◆ Longue note</a>
                        <a class="dropdown-item text-muted" href="#">★★ Overjoy</a>
                        <a class="dropdown-item text-muted" href="#">◆◆ Overoy longue note</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-1 mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Communauté
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="../view/forum.php">Forum</a>
                        <a class="dropdown-item text-muted" href="../view/playerList.php">Liste des joueurs</a>
                    </div>
                </li>
                <?php if(isset($_SESSION['pseudo'])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-1 mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['pseudo']?>
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-muted" href="../view/friendsRival.php">Rival/Amis</a>
                        <a class="dropdown-item text-muted" href="../view/profil.php?id=<?=$_SESSION['id']?>">Profil</a>
                    </div>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <?php if(isset($_SESSION['isConnect']) == true){ ?>
                    <a class="nav-link mt-1 mr-5" href="../controller/controllerHeader.php">Déconnexion</a>
                    <?php } else { ?>
                    <a class="nav-link mt-1 mr-5" href="/view/ConnexionForm.php">Connexion/Inscription</a>
                    <?php } ?>
                    <a> 
                </li>
            </ul>
        </div>
    </nav>
</div>
</head>
