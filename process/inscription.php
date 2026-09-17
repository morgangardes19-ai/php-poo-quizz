<?php  
// Partie sécuritée
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: ../public/inscription.php?error=bad-method");
    exit();
}
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['mdp']) || !isset($_POST['confirmation-mdp'])) {
    header("Location: ../public/inscription.php?error=missing-value");
    exit();
}
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['mdp']) || empty($_POST['confirmation-mdp'])) {
    header("Location: ../public/inscription.php?error=empty-value");
    exit();
}


// Input sanitization
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));

if ($_POST['mdp'] != $_POST['confirmation-mdp']) {
    header("Location: ../public/inscription.php?error=password-not-matching");
    exit();
}
$passwordHash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);



require_once "../utils/db.php";
require_once "../utils/autoloader.php";

// $utilisateurRepository = new UtilisateurRepository($db);
// $isSuccess = $utilisateurRepository->insertUser($name, $email, $passwordHash);

// ICI : REUTILISER LA METHODE findByEmail avec un IF

if ($isSuccess) {
    header("Location: ../public/connexion.php");
} else {
    header("Location: ../public/inscription.php?error=database-failed");
}

?>