<?php 
class AnswerMapper {

// Méthode qui permettra de transformer le tableau associatif récupéré avec une requête SQL en objet
    public static function mapToObject(array $datas): Answer
    {
        return new Answer(
            $datas['id'],
            $datas['reponse'],
            $datas['isCorrect']
        );
    }
}

?>