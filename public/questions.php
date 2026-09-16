<?php

require_once "../utils/autoloader.php";
require_once "../utils/db.php";
session_start();
// session_destroy();


// var_dump($_SESSION);

// var_dump de la question
// var_dump(
//     $_SESSION["questions"][$_SESSION["indicateur_question"]]
// )
?>
   
<?php 
/**
 * @var Question $questionActuelle
 */
$questionActuelle = $_SESSION["questions"][$_SESSION["indicateur_question"]];

// vardump des réponse d'une question
// var_dump($questionActuelle->getAnswers());

require_once "./_partials/_head.php";
?>

<body>

    <h1>Enoncé de la question actuelle :</h1>
    <h2><?= $questionActuelle->getIntitule() ?></h2>


    <?php 
    /**
     * @var Answer $answer
     */
    foreach ($questionActuelle->getAnswers() as $index => $answer) { ?>
        <a href="../process/next-question.php?choix=<?= $index ?>"><?= $answer->getAnswer() ?></a>
    <?php } ?>


</body>
</html>
