<?php
if (!isset($_SESSION['utilisateur'])) {
    header("Location: ../public/connexion.php");
    exit();
}