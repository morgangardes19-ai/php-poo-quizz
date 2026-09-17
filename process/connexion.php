<?php
// Partie sécuritée
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: ../public/connexion.php?error=bad-method");
    exit();
}
if (!isset($_POST['name']) || !isset($_POST['mdp'])) {
    header("Location: ../public/connexion.php?error=missing-value");
    exit();
}
if (empty($_POST['name']) || empty($_POST['mdp'])) {
    header("Location: ../public/connexion.php?error=empty-value");
    exit();
}


// Input sanitization
$name = htmlspecialchars(trim($_POST['name']));


require_once "../utils/db.php";
require_once "../utils/autoloader.php";

$utilisateurRepository = new UtilisateurRepository($db);
$utilisateur = $utilisateurRepository->findAllUsers();

if ($utilisateur) {
    if (password_verify($_POST['mdp'], $utilisateur['mdp'])) {
        session_start();
        $_SESSION['utilisateur'] = $utilisateur;
        header("Location: ../public/index.php?connected=true");
        exit();
    } else {
        header("Location: ../public/connexion.php?error=wrong-password");
        exit();
    }
} else {
    header("Location: ../public/connexion.php?error=unknown-user");
    exit();
}
