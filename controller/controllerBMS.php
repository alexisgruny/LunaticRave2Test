<?php
// Instanciation de la classe Scores
$score = new scores();
// Récupération de l'id et du scale par l'url
$score->id = $_GET['id'];
$score->scale = $_GET['scale'];
// Appel de la méthode showScore
$showScore = $score->showScores();

