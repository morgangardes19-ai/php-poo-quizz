<?php
class Question
{
    private int $id;
    private string $intitule;
    private array $answers;

    public function __construct(
        int $id,
        string $intitule,
        array $answers
    ) {
        $this->id = $id;
        $this->intitule = $intitule;
        $this->answers = $answers;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getIntitule(): string
    {
        return $this->intitule;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }
}
