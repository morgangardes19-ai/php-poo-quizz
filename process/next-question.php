<?php 
// Exemples de choses qu'on peut faire ici dans ce process : 
// - Vérifier si la réponse est bonne
// - Incrémenter le score si la réponse est bonne
// - Passer à la question suivante
require_once "../utils/autoloader.php";
session_start();

// 1. Récupérer la réponse cliquée depuis l'URL
$choix = $_GET['choix'];

// var_dump($choix);
// die();

// 2. Récupérer la question actuelle (comme dans questions.php)
$questionActuelle = $_SESSION["questions"][$_SESSION["indicateur_question"]];

// var_dump($questionActuelle);
// die();

// 3. Récupérer la réponse choisie parmi les réponses de la question
$reponseChoisie = $questionActuelle->getAnswers()[$choix];

// var_dump($reponseChoisie);
// die();

// 4. Si la réponse est correcte, augmenter le score
if ($reponseChoisie->isCorrect()) {
    $_SESSION["score"] = $_SESSION["score"] + 1;
}

// var_dump($_SESSION);
// die();

// 5. Passer à la question suivante
$_SESSION["indicateur_question"] = $_SESSION["indicateur_question"] + 1;

// var_dump($_SESSION);
// die();

header("Location: ../public/questions.php");
exit();


?>