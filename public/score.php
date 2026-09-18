<?php
require_once "../utils/autoloader.php";
require_once "../utils/db.php";
session_start();


require_once "./_partials/_head.php";

?>

<main class="flex flex-col justify-center items-center gap-10 min-h-screen bg-top bg-cover bg-[url('../images/quizz-score.png')]">

    <h1 class="font-Cormorant-Garamond font-bold text-[40px] tracking-[3px]">Félicitations vous avez terminé ce quiz !</h1>
    <p class="font-Inter text-[20px] lg:text-[32px] ">Votre score :</p>

    <p class="flex justify-center items-center bg-royal-gold border-[3px] border-emerald w-62.5 h-15 text-[20px] lg:text-[32px] lg:w-70 lg:h-20 rounded-lg">
        <?php if ($_SESSION["score"] === 0 || $_SESSION["score"] === 1) { ?>
            <?= $_SESSION["score"] ?>/<?= count($_SESSION["questions"]) ?> point
        <?php } else { ?>
            <?= $_SESSION["score"] ?>/<?= count($_SESSION["questions"]) ?> points
        <?php } ?>
    </p>

    <a class="flex justify-center items-center bg-royal-gold border-[3px] border-emerald w-62.5 h-15 text-[20px] lg:text-[32px] lg:w-70 lg:h-20 rounded-lg" href="index.php">Retour à la liste des quiz</a>

</main>

<?php
require_once "./_partials/_footer.php";

?>