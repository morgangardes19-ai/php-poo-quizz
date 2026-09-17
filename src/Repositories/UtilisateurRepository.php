<?php
class UtilisateurRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Envoie les données d'inscription de l'utilisateur en BDD
     */
     public function insertUser(string $name, string $email, string $mdp): bool
    {
        try {
            $request = $this->db->prepare("INSERT INTO `utilisateur`(`name`, `email`, `mdp`) VALUES (:name, :email, :mdp)");

            $request->execute([
                ':name' => $name,
                ':email' => $email,
                ':mdp' => $mdp
            ]);

            return true;
        } catch (\Throwable $th) {

            return false;
        }
    }

}
