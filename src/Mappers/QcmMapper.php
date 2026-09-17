<?php 
class QcmMapper {

// Méthode qui permettra de transformer le tableau associatif récupéré avec une requête SQL en objet
    public static function mapToObject(array $datas): Qcm
    {
    
        return new Qcm(
            $datas['id'],
            $datas['nom'],
            $datas['description'],
            null,
            $datas['theme'],
            $datas['logo']
        );
    }
}

?>