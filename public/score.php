<?php
require_once "../utils/autoloader.php";
require_once "../utils/db.php";
session_start(); 


require_once "./_partials/_head.php";

?> 

<main class="min-h-screen bg-top bg-cover bg-[url('../images/quizz-score.png')]">

 <h1>Félicitations vous avez terminé ce quiz !</h1>
 <p>Votre score : <?= $_SESSION["score"] ?>/<?= count($_SESSION["questions"]) ?></p>
 <a href="index.php">Retour à la liste des quiz</a>

</main>

 <?php
require_once "./_partials/_footer.php";

?>