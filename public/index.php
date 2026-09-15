<?php
require_once "./_partials/_head.php";
require_once "../utils/autoloader.php";
require_once "../utils/db.php";

// A remplacer plus tard par un appel à la BDD pour récupérer tous les quizz existant !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// ===================== Partie du QCM 1 sur les plantes ========================
// Préparations des tableaux de réponse pour créer les questions



$possibilitesReponsesQuestion1 = [
    new Answer('Une rose', false),
    new Answer('La rafflésie', true)
];

$possibilitesReponsesQuestion2 = [
    new Answer('Hydnora africana', true),
    new Answer('Un pissenlit', false)
];

// Préparations des questions possibles pour le Qcm
$questionPossibleDuQcm = [
    new Question('Quelle est la fleur la plus rare du monde ?', $possibilitesReponsesQuestion1),
    new Question('Quelle plante a inspiré le design des Demogorgons dans la série Stranger Things ?', $possibilitesReponsesQuestion2)
];


// Création du Qcm à partir des questions et réponses précédentes
$qcmPlantes = new Qcm(1, "Quiz sur les plantes", "Testez vos connaissances sur le monde végétal", $questionPossibleDuQcm);
// ==================================================================================

// ===================== Partie du QCM 2 sur les livres =============================
// Préparations des tableaux de réponse pour créer les questions
$possibilitesReponsesQuestion3 = [
    new Answer('Franck Thilliez', false),
    new Answer('Joanne Rowling', true)
];

$possibilitesReponsesQuestion4 = [
    new Answer('Bertrant Piccard', true),
    new Answer('Tony Attwood', false)
];

// Préparations des questions possibles pour le Qcm
$questionPossibleDuQcmLivre = [
    new Question('Qui a écrit Harry Potter ?', $possibilitesReponsesQuestion3),
    new Question('Qui a écrit le livre Changer d\'altitude ?', $possibilitesReponsesQuestion4)
];


// Création du Qcm à partir des questions et réponses précédentes
$qcmLivres = new Qcm(2, "Quiz sur les livres", "Découvrez votre maîtrise de la littérature", $questionPossibleDuQcmLivre);
// ====================================================================================

$qcms = [
    $qcmPlantes,
    $qcmLivres
];
?>


<body class="bg-left bg-[url('../images/bg-quizz.png')] px-8 py-8 flex flex-col gap-12.5">
    <h1 class="font-Cormorant-Garamond text-center text-[40px] tracking-[3px] font-bold">Bienvenue au Quiz</h1>
    <p class="text-[20px]  text-center">Sélectionnez un quiz pour tester vos connaissances et découvrir votre score !</p>

    <div class="flex flex-col gap-10">
        <?php foreach ($qcms as $qcm) { ?>

            <a class="" href="../process/start-quiz.php?id=<?= $qcm->getId() ?>">
                <h2><?= $qcm->getName() ?></h2>
                <p><?= $qcm->getDescription() ?></p>
                <p>• <?= count($qcm->getQuestions()) ?> questions</p>
            </a>
        <?php } ?>

    </div>

</body>

</html>