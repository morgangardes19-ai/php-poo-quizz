<?php
class Qcm
{
    private int $id;
    private string $name;
    private array $questions;

    public function __construct(int $id, string $name, array $questions)
    {
        $this->id = $id;
        $this->name = $name;
        $this->questions = $questions;
    }

    public function getId(): int
    {
        return $this->id;
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
