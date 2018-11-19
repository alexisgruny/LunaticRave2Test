<!-- Include des models, controller et du header -->
<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelScores.php';
include '../controller/controllerBMS.php';
include '../view/header.php';
?>
<!-- header -->

<body>
    <div class="container-fluid">
        <div class="row">
            
            <!-- Liste des scaling -->
            <div class="col-md-3 bg-dark" id="BMSscale">
                <legend> Section </legend>
                <li class="col-md-12"><a href="../view/BMS.php?scale=1&id=<?= $score->id ?>">☆ Normal</a></li>
                <li class="col-md-12"><a href="../view/BMS.php?scale=2&id=<?= $score->id ?>">○ normal N°2</a></li>
                <li class="col-md-12"><a href="../view/BMS.php?scale=3&id=<?= $score->id ?>">★ Insane</a></li>
                <li class="col-md-12"><a href="../view/BMS.php?scale=4&id=<?= $score->id ?>">▼ Insane N°2</a></li>
                <li class="col-md-12"><a href="../view/BMS.php?scale=5&id=<?= $score->id ?>">◆ Longue note</a></li>
                <li class="col-md-12"><a href="../view/BMS.php?scale=6&id=<?= $score->id ?>">★★ Overjoy</a></li>
                <li class="col-md-12"><a href="../view/BMS.php?scale=7&id=<?= $score->id ?>">◆◆ Overoy longue note</a></li>
            </div>
            <!-- Fin du listing -->
            
            <!-- Affichage d'un tableau de score -->
            <table class="col-md-7 offset-md-1 mt-5  border table table-light table-striped">
                <thead class="bg-dark white-text">
                    <tr>
                        <th>Difficulty</th>
                        <th>Music</th>
                        <th>ExScore</th>
                        <th>Bad/Poor</th>
                        <th>Hitted note</th>
                        <th>Max Combo</th>
                        <th>Clear Type</th>
                    </tr>
                </thead> 
                <tbody class="grey">
                    <?php
                    foreach ($showScore as $showScore) {
                        ?>
                        <tr>
                            <td><?= $showScore->difficulty ?></td>
                            <td><a href="<?= $showScore->link ?>"><?= $showScore->music ?></a></td>
                            <td><?= $showScore->exScore . '/' . $showScore->maxNote * 2?></td>
                            <td><?= $showScore->badpoor ?></td>
                            <td><?= $showScore->noteHitted . '/' . $showScore->maxNote ?></td>
                            <td><?= $showScore->maxCombo . '/' . $showScore->maxNote ?></td>
                            <td><?= $showScore->clearType ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fin du tableau de score -->
            
        </div>
    </div>
</body>
<?php include '../view/footer.php' ?>
</html>
