<?php
class AnswerRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findAll(): array
    {
        $request = $this->db->query("SELECT* FROM `reponse` WHERE 1");
        $answersDatas = $request->fetchall(PDO::FETCH_ASSOC);
        $answers = [];

        foreach ($answers as $answer) {
            $answers[] = AnswerMapper::mapToObject($answersDatas);
        }
        return $answers;
    }
}
