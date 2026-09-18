<?php
class QuestionRepository
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
     * Cette méthode permet de récupérer toutes les questions possible pour un Qcm
     * @param int $qcmId = l'id du qcm dont on veut les questions possible
     * @return array $questions = un tableau rempli d'objet Questions
     */
    public function findByQcmId(int $qcmId): array
    {
        $request = $this->db->prepare("SELECT * FROM question WHERE qcm_id = :qcmId");
        $request->execute([':qcmId' => $qcmId]);

        $questionsDatas = $request->fetchAll(PDO::FETCH_ASSOC);
        $questions = [];
        foreach ($questionsDatas as $questionDatas) {
            $questions[] = QuestionMapper::mapToObject($questionDatas);
        }
        return $questions;
    }
}