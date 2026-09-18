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

<main>

    <h1><?= $questionActuelle->getIntitule() ?></h1>


    <?php 
    /**
     * @var Answer $answer
     */
    foreach ($questionActuelle->getAnswers() as $index => $answer) { ?>
        <a style="background-color: <?= $question->getTheme() ?>;" href="../process/next-question.php?choix=<?= $index ?>"><?= $answer->getAnswer() ?></a>

    <?php } ?>

</main>

<?php
require_once "./_partials/_footer.php";

?>