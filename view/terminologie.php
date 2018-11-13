<!-- Démarrage de la session et include du header -->
<?php 
session_start();
include '../view/header.php';
?>

<!-- TEXT : Terminologie -->
<div class="container-fluid">
    <div class="bg-dark card border offset-md-1 col-md-10 mt-5 font-text">
        <div class="text-center text-white card-text">
            <h1 class="blue-text font-weight-bold mt-5">TERMINOLOGIE</h1>
            <p>Beaucoup de nouveaux venus sont en difficultés avec les termes que les joueurs BMS utilisent, leur significations ne sont pas évidentes. Espérons que cette liste va vous aider à mieux comprendre les mots auxquels les débutants ne sont pas familiers.</p>

            <h2 class="blue-text font-weight-bold mt-5">BMS / BME / BML / PMS</h2>
            <p>C'est l'abréviation de Be-Music Source. Qui peut aussi se dire Be-Music Script.
                Ce format était auparavant connu sous Be-Music Data Format '98, et a été créer par Urao Yane et NBK en 1998 pour le jeu BM98.
                <a href="http://bm98.yaneu.com/bm98/bmsformat.html">Vous trouverez plus d'informations ici</a></p>

            <p>Habituellement, lorsque les gens parlent de BMS, ils se réfèrent à la communauté et au contenu en lui-même. Désormais, beaucoup de gens se réfèrent à LR2 lorsque le terme BMS est évoqué.</p>

            <p>Les fichiers BMS utilisent plusieurs extensions pour définir son type de chart.</p>

            <p>.bms (Be-Music Script) inclue tout.<br />
                .bme (Be-Music Extend) est utilisé pour le 7K ou le 14K.<br />
                .bml (Be-Music Longnote) est utilisé pour les charts avec des LNs (longues notes).<br />
                .pms (Pop-Music Script) est utilisé pour le 9K.<br />
            </p>
            <h3 class="blue-text font-weight-bold mt-5">LN / CN / HCN</h3>
            <p>LN est l'abrévaition de LONG NOTE (longue note).<br />
                Les longue notes on étaient ajoutées dans les BMS avant quelles soit ajouté sur BeatMania IIDX.</p>

            <p>HCN est l'abréviation pour HELL CHARGE NOTE (Grosse densité de note).<br />
                Celle ci on était dans ajoutée dans BeatMania IIDX 23:Copula.</p>

            <h4 class="blue-text font-weight-bold mt-5">差分 - Sabun</h4>
            <p>Vous trouverez ce terme sur les sites japonais qui parlent de BMS.<br />
                Il se réfère à des charts additionnels d'une musique, créer après la sortie initiale en BMS.</p>

            <h5 class="blue-text font-weight-bold mt-5">Dan</h5>
            <p>Le Dan est le système de grade. On parle du plus petit jusqu'au plus gros nombre. <br />
                Vous trouverez des gens dire qu'ils sont septième dan, neuvième dan, kaiden. Ils parlent ainsi du rang (段位認定 (Daninintei)) le plus élevé qu'ils ont clear.</p>

            <h6 class="blue-text font-weight-bold mt-5">発狂BMS - Hakkyo BMS</h6>
            <p>Ce terme traduit veut dire "Insane BMS", qui se réfère aux BMS charts dans le LR2IR (Internet Ranking) Insane Scale, qui sont des charts pour les joueurs de niveaux intermédiaires.</p>

            <h7 class="blue-text font-weight-bold mt-5">皿 - Sara - TT</h7>
            <p>Ce terme traduit veut dire "Assiette", et se réfère au scratch.</p>

            <h8 class="blue-text font-weight-bold mt-5">SP / DP</h8>
            <p>SP est l'abréviation de Single Play, qui veut dire chart qui utilise 5 ou 7K et une turntable (scratch).<br />
                DP est l'abréviation de Double Play, qui veut dire chart qui utilise 10 ou 14K et deux turntables.</p>
        </div>
    </div>
    <!-- FIN -->
    
</div>
</body>

<!-- Include du footer -->
<?php include '../view/footer.php' ?>
</html>


