<?php
class Question
{
    private string $intitule;
    private array $answers;

    public function __construct(
        string $intitule,
        array $answers
    )
    {
       $this->intitule = $intitule;
       $this->answers = $answers;
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
