<?php
class Question
{
    private string $intitule;
    // private array $answers;

    public function __construct(
        string $intitule,
        // array $answers
    )
    {
       $this->intitule = $intitule;
    }

    public function getIntitule(): string
     {
        return $this->intitule;
    }
}

