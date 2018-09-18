<?php include('view/menu.php') ?>
<?php include('stairwayTable.php') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="BMSscale">
            <legend> Section </legend>
            <li><a href="#">☆ Normal</a></li>
            <li><a href="#">○ normal N°2</a></li>
            <li><a href="#">★ Insane</a></li>
            <li><a href="#">▼ Insane N°2</a></li>
            <li><a href="#">◆ Longue note</a></li>
            <li><a href="#">★★ Overjoy</a></li>
            <li><a href="#">◆◆ Overoy longue note</a></li>
        </div>
        <div class="col-md-8 linkInsane">
        <p class="InsaneRate"> <?= lien() ?> </p>
        </div>
        <table class=" col-md-8">
            <thead>
                <?= $tableHeader[0][0] ?>
            </thead>
            <tbody>
                <?= $tableContent[0][0] ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
