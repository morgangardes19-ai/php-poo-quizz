<?php 
class QuestionMapper {

// Méthode qui permettra de transformer le tableau associatif récupéré avec une requête SQL en objet
    public static function mapToObject(array $datas): Question
    {
    
        return new Question(
            $datas['id'],
            $datas['intitule'],
            null,
            $datas['theme'],
        );
    }
}

?>