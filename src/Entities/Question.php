<?php
class Question
{
    private string $intitulé;
    // private array $answers;

    public function __construct(
        string $intitulé,
        // array $answers
    )
    {
       $this->intitulé = $intitulé;
    }

    public function getIntitule(): string
     {
        return $this->intitulé;
    }
}

