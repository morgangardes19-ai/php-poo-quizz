<?php
class AnswerRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // public function findAll(): array
    // {
    //     $request = $this->db->query("SELECT* FROM `reponse` WHERE 1");
    //     $answersDatas = $request->fetchall(PDO::FETCH_ASSOC);

    //     $answers = [];
    //     foreach ($answers as $answer) {
    //         $answers[] = AnswerMapper::mapToObject($answersDatas);
    //     }
    //     return $answers;
    // }

    /**
     * Cette méthode permet de récupérer toutes les réponses possible pour une question
     * @param int $questionId = l'id de la question dont on veut les réponses possible
     * @return array $answers = un tableau remplis d'objet Answer
     */
    public function findByQuestionId(int $questionId): array
    {
        $request = $this->db->prepare("SELECT * FROM reponse WHERE question_id = :questionId");
        $request->execute([':questionId' => $questionId]);

        $answersDatas = $request->fetchAll(PDO::FETCH_ASSOC);
        $answers = [];
        foreach ($answersDatas as $answerDatas) {
            $answers[] = AnswerMapper::mapToObject($answerDatas);
        }
        return $answers;
    }

}
