<?php
class Answer
{
    private string $answer;

       public function __construct(
        string $answer
    )
    {
       $this->answer = $answer;
    }

    public function getAnswer(): string
     {
        return $this->answer;
    }
}
