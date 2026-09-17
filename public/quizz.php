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


<body class="bg-left bg-[url('../images/bg-quizz.png')] px-8 py-8 flex flex-col gap-12.5">
    <p class="text-[20px]  text-center">Sélectionnez un quiz pour tester vos connaissances et découvrir votre score !</p>

    <div class="flex flex-col gap-10">
        <!-- Cette boucle fait l'affichage avec des balises echo -->
        <?php foreach ($qcms as $qcm) { ?>

            <a class="" href="../process/start-quiz.php?id=<?= $qcm->getId() ?>">
                <h2><?= $qcm->getName() ?></h2>
                <p><?= $qcm->getDescription() ?></p>
                <p>• <?= $qcm->compteQuestions() ?> questions</p>
            </a>
        <?php } ?>

        <a href="./inscription.php">Inscription</a>
        <a href="./connexion.php">Connexion</a>
        <a href="./deconnexion.php">Deconnexion</a>

    </div>

</body>

</html>