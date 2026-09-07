<?php 
// Exemples de choses qu'on peut faire ici dans ce process : 
// - Vérifier si la réponse est bonne
// - Incrémenter le score si la réponse est bonne
// - Passer à la question suivante
require_once "../utils/autoloader.php";
session_start();

$_SESSION["indicateur_question"] = $_SESSION["indicateur_question"] + 1;

header("Location: ../public/questions.php");
exit();


?>