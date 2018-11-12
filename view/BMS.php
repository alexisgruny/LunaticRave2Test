<?php
session_start();
include '../model/modelDatabase.php';
include '../model/modelScores.php';
include '../controller/controllerBMS.php';
include '../view/header.php';
?>
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
            <table>
                <thead>
                    <tr>
                        <th>difficulty</th>
                        <th>musique</th>
                        <th>exScore</th>
                        <th>BP</th>
                        <th>Note hitted</th>
                        <th>MaxCombo</th>
                        <th>Clear Type</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php
                    foreach ($showScore as $showScore) {
                        ?>
                        <tr>
                            <td><?= $showScore->difficulty ?></td>
                            <td><a href="<?= $showScore->link ?>"><?= $showScore->music ?></a></td>
                            <td><?= $showScore->exScore ?></td>
                            <td><?= $showScore->badpoor ?></td>
                            <td><?= $showScore->noteHitted ?></td>
                            <td><?= $showScore->maxCombo ?></td>
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
