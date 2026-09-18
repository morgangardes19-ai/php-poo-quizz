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

// vardump des réponses d'une question
// var_dump($questionActuelle->getAnswers());

require_once "./_partials/_head.php";
?>

<main class="flex flex-col items-center justify-center gap-20" style="background-image: <?= $questionActuelle->getTheme() ?>;">

    <h1 class="font-Cormorant-Garamond text-[40px] font-bold tracking-[3px] lg:text-[54px]"><?= $questionActuelle->getIntitule() ?></h1>

    <p class="text-[20px] lg:text-[24px]">Sélectionnez une réponse :</p>


    <?php 
    /**
     * @var Answer $answer
     */
    foreach ($questionActuelle->getAnswers() as $index => $answer) { ?>
        <a class="p-4 border-[3px] border-royal-gold rounded-2xl text-center text-[20px] w-62.5 h-15 lg:w-82.5 lg:h-auto lg:flex-row lg:text-[24px]" href="../process/next-question.php?choix=<?= $index ?>"><?= $answer->getAnswer() ?></a>

    <?php } ?>

<p>Question : <?= $_SESSION["questions"] ?>/<?= count($_SESSION["questions"]) ?></p>

</main>

<?php
require_once "./_partials/_footer.php";

?>