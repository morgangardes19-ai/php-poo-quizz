<?php
require_once "../utils/autoloader.php";

// ===================== Partie du QCM 1 sur les plantes ========================
// Préparations des tableaux de réponse pour créer les questions
$possibilitesReponsesQuestion1 = [
    new Answer('Hydnora africana', false),
    new Answer('Rafflésie', true)
];

$possibilitesReponsesQuestion2 = [
    new Answer('Hydnora africana', true),
    new Answer('Rafflésie', false)
];

// Préparations des questions possibles pour le Qcm
$questionPossibleDuQcm = [
    new Question('Quelle est la fleur la plus rare du monde ?', $possibilitesReponsesQuestion1),
    new Question('Quelle plante a inspiré le design des Demogorgons dans la série Stranger Things ?', $possibilitesReponsesQuestion2)
];


// Création du Qcm à partir des questions et réponses précédentes
$qcm = new Qcm("Quizz des plantes", $questionPossibleDuQcm);
// ==================================================================================

// ===================== Partie du QCM 2 sur les livres =============================
// Préparations des tableaux de réponse pour créer les questions
$possibilitesReponsesQuestion3 = [
    new Answer('Bertrant Piccard', false),
    new Answer('Joanne Rowling', true)
];

$possibilitesReponsesQuestion4 = [
    new Answer('Bertrant Piccard', true),
    new Answer('Joanne Rowling', false)
];

// Préparations des questions possibles pour le Qcm
$questionPossibleDuQcm = [
    new Question('Qui a écrit Harry Potter ?', $possibilitesReponsesQuestion3),
    new Question('Qui a écrit le livre Changer d\'altitude ?', $possibilitesReponsesQuestion4)
];


// Création du Qcm à partir des questions et réponses précédentes
$qcm = new Qcm("Quizz des livres", $questionPossibleDuQcm);
// ====================================================================================

// var_dump($qcm->getQuestions()[0]->getIntitule());
?>
    
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM</title>
</head>
<header></header>


<body>

    <h1><?=  $qcm->getName()  ?></h1>

    <p><?= "1/{$qcm->compteQuestions()}" ?></p>

    <!-- <?php 
    foreach ($qcm->getQuestions() as $question) { ?>
        <p><?= $question->getIntitule() ?></p>
    
    
    <?php 
    }
    
    ?> -->


    <p><?= $qcm->getQuestions()[0]->getIntitule() ?></p>

</body>
<footer></footer>
</html>