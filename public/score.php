<?php
require_once "../utils/autoloader.php";
require_once "../utils/db.php";
session_start(); 


require_once "./_partials/_head.php";

?> 


 <h1>Quiz terminé !</h1>
 <p>Ton score : <?= $_SESSION["score"] ?>/<?= count($_SESSION["questions"]) ?></p>
 <a href="index.php">Retour à la liste des quiz</a>