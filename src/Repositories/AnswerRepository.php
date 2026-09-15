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

    // public function findByQuestionId(int $id): bool
    // {
    //     try {
    //         $request = $this->db->prepare("SELECT `id` FROM `question` WHERE (:id)");
    //         $request->execute([
    //             ':id' => $id
    //         ]);

    //         return true;
    //     } catch (\Throwable $th) {

    //         return false;
    //     }
    // }

    public function findByQuestionId(int $id): array
{
    $request = $this->db->prepare("SELECT * FROM reponse WHERE question_id = :id");
    $request->execute([':id' => $id]);

    $answersDatas = $request->fetchAll(PDO::FETCH_ASSOC);
    $answers = [];
    foreach ($answersDatas as $answerDatas) {
        $answers[] = AnswerMapper::mapToObject($answerDatas);
    }
    return $answers;
}

    //     public function findByQuestionId(int $id)
    //     {
    //         $request = $this->db->query("SELECT `id` FROM `question` WHERE 1");
    //          $answersDatas = $request->fetchAll(PDO::FETCH_ASSOC);
    //     $answers = [];
    //     foreach ($answersDatas as $answerDatas) {
    //         $answers[] = AnswerMapper::mapTOOBject($answerDatas);
    //     }
    //     return $answers;
    // }
}
