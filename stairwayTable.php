<?php
$page = 12;
$headerAdresse = 'http://stairway.sakura.ne.jp/bms/LunaticRave2/?contents=music&page='.$page;
$headerPage = file_get_contents ($headerAdresse);
preg_match_all ('/<tr class="header">.*<\/tr>/Us', $headerPage, $tableHeader);
$contentAdresse = 'http://stairway.sakura.ne.jp/bms/LunaticRave2/?contents=music&page='.$page;
$contentPage = file_get_contents ($contentAdresse);
preg_match_all ('/<td class="id">.*<\/tr>/s', $contentPage, $tableContent);
function lien(){
for ($i=0;$i<=25;$i++){
    echo '<a href="#">  '.$i.'  </a>';
}};
?>