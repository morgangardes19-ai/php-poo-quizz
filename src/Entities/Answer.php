<?php
class Answer
{

    public function __construct(
        private int $id,
        private string $answer,
        private bool $isCorrect,
    ) {}


    public function getId(): int
    {
        return $this->id;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    public function isCorrect(): bool
    {
        return $this->isCorrect;
    }
}
