<?php
class Question
{
    public function __construct(
        private int $id,
        private string $intitule,
        private ?array $answers
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getIntitule(): string
    {
        return $this->intitule;
    }

    public function getAnswers(): ?array
    {
        return $this->answers;
    }

    public function setAnswers(array $answers): self {
        $this->answers = $answers;
        return $this;
    }
}
