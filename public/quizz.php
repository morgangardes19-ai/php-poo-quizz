<?php
require_once "../utils/autoloader.php";
require_once "../utils/db.php";


// On récupère TOUS les qcm de la BDD
$qcmRepository = new QcmRepository($db);
$qcms = $qcmRepository->findAll();

// Pour chaque Qcm, je récupère les questions associés
$questionRepository = new QuestionRepository($db);

// Cette boucle charge les questions de chaque QCM
/**
 * @var Qcm $qcm
 */
foreach ($qcms as $qcm) {
    $qcmQuestions = $questionRepository->findByQcmId($qcm->getId());
    $qcm->setQuestions($qcmQuestions);
}


require_once "./_partials/_head.php";

?>

<main class="min-h-screen bg-bottom bg-cover bg-[url('../images/bg-quizz.png')] px-8 py-8 flex flex-col gap-12.5">
    <p class="font-Inter text-[20px] text-center lg:text-[32px]">Sélectionnez un quiz pour tester vos connaissances et découvrir votre score !</p>

    <div class="flex flex-col justify-center items-center gap-10 lg:flex-row">
        <!-- Cette boucle fait l'affichage avec des balises echo -->

        <?php
        /**
         * @var Qcm $qcm
         */
        foreach ($qcms as $qcm) { ?>

            <a class="flex flex-col gap-2 p-4 border-[3px] border-royal-gold rounded-2xl w-82.5 h-auto"
                style="background-color: <?= htmlspecialchars($qcm->getTheme()) ?>;"
                href="../process/start-quiz.php?id=<?= $qcm->getId() ?>">
                <img class="w-8 h-auto" src="<?= $qcm->getLogo() ?>" alt="Logo">


                <h2 class="font-bold text-[20px] lg:text-[24px]"><?= $qcm->getName() ?></h2>
                <p class="text-grey-text text-[16px] lg:text-[20px]"><?= $qcm->getDescription() ?></p>
                <p class="text-grey-text text-[16px] lg:text-[20px]">• <?= $qcm->compteQuestions() ?> questions</p>

            </a>
        <?php } ?>

    </div>

</main>

<?php
require_once "./_partials/_footer.php";

?>