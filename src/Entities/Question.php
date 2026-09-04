<?php
class Question
{
    private string $intitule;
    private array $answer;

    public function __construct(
        string $intitule,
        array $answer
    )
    {
       $this->intitule = $intitule;
    }

    public function getIntitule(): string
     {
        return $this->intitule;
    }

    public function getAnswers(): array 
    {
    return $this->answer;
}
}

