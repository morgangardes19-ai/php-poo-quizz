<?php
if ($_SERVER['REQUEST_METHOD'] !== "GET") {
    header("Location: ../public/index.php?error=bad-method");
    exit();
}
if (!isset($_GET['id'])) {
    header("Location: ../public/index.php?error=missing-value");
    exit();
}
if (empty($_GET['id'])) {
    header("Location: ../public/index.php?error=empty-value");
    exit();
}

require_once "../utils/autoloader.php";
require_once "../utils/db.php";

$idQcm = intval(htmlspecialchars(trim($_GET['id'])));


// On récupère les questions du Qcm choisis (grâce à son id)
$questionRepository = new QuestionRepository($db);
$questions = $questionRepository->findByQcmId($idQcm);

// Pour chaque question, je récupère les réponses associées
$answerRepository = new AnswerRepository($db);

/**
 * @var Question $question
 */
foreach ($questions as $question) {
    $questionAnswers = $answerRepository->findByQuestionId($question->getId());
    $question->setAnswers($questionAnswers);
}

// var_dump($questionPossibleDuQcm);
session_start();

// var_dump($_SESSION);
// session_destroy();

// On remplit la session en fonction de nos besoin, il y aura potentiellement + de choses plus tard à ranger dedans
$_SESSION['quiz_id'] = $idQcm;
$_SESSION['questions'] = $questions;
$_SESSION['indicateur_question'] = 0;
$_SESSION['score'] = 0;

header("Location: ../public/questions.php");
exit();

?>