<?php
class Answer
{
    private string $answer;
    private bool $isCorrect;

       public function __construct(
        string $answer
    )
    {
       $this->answer = $answer;
       $this->isCorrect = $isCorrect;
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
