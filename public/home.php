<?php
require_once "../utils/autoloader.php";


$possibilitesReponsesQuestion1 = [
    new Answer('Hydnora africana'),
    new Answer('Rafflésie')
];
// $possibilitesReponsesQuestion2 = [
//     new Answer('Hydnora africana'),
//     new Answer('Rafflésie')
// ];


$question1 = new Question('Quelle est la fleur la plus rare du monde ?', $possibilitesReponsesQuestion1);
$question2 = new Question('Quelle plante a inspiré le design des Demogorgons dans la série Stranger Things ?');

$qcm = new Qcm("Quizz des plantes", [
    $question1,
    $question2
]);

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


    <!-- <p>Réponse 1 : Hydnora africana</p>
    <p>Réponse 2 : Rafflésie</p>

    <p>Quelle plante a inspiré le design des Demogorgons dans la série Stranger Things ?</p>
    <p>Réponse 1 : Hydnora africana</p>
    <p>Réponse 2 : Rafflésie</p> -->

</body>


<footer></footer>

</html>