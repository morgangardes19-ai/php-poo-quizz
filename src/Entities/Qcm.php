<?php
class Qcm
{
    private string $name;
    private array $questions;

    public function __construct(string $name, array $questions)
    {
        $this->name = $name;
        $this->questions = $questions;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * Cette méthode permet d'obtenir le nombre de questions d'un QCM.
     */
    public function compteQuestions(): int
    {
        return count($this->questions);
    }
}
