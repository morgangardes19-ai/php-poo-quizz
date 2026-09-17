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



//  ?Utilisateur signifie : Soit un Objet Utilisateur, soit null si pas trouvé
// SELECT => Ligne | FROM => Table | WHERE => Colonne
    public function findByName(string $name): ?Utilisateur
    {
        $request = $this->db->prepare("SELECT * FROM `utilisateur` WHERE `name` = :name");
        $request->execute([':name' => $name]);

        $utilisateurDatas = $request->fetch(PDO::FETCH_ASSOC);

        // Si aucune ligne trouvée, fetch() renvoie false → on renvoie null
        if (!$utilisateurDatas) {
            return null;
        }

        $utilisateur = UtilisateurMapper::mapToObject($utilisateurDatas);

        return $utilisateur;
    }
}
