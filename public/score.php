<?php
require_once "../utils/autoloader.php";
session_start(); 
?> 

 <h1>Quiz terminé !</h1>
 <p>Ton score : <?= $_SESSION["score"] ?> points, pour <?= $_SESSION["score"] ?>/<?= count($_SESSION["questions"]) ?> réponses justes. </p>
 <a href="index.php">Retour à la liste des quiz</a>