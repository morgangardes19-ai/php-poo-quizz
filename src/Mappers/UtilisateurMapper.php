<?php 
class UtilisateurMapper {

    public static function mapToObject(array $datas): Utilisateur
    {
    
        return new Utilisateur(
            $datas['id'],
            $datas['name'],
            $datas['email'],
            $datas['mdp'],

        );
    }
}

?>