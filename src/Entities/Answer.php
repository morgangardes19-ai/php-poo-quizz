<?php
class Answer
{
    private array $answer;

       public function __construct(
        array $answer
    )
    {
       $this->answer = $answer;
    }

    public function getAnswer(): array
     {
        return $this->answer;
    }
}

$answerQuestion1 = new Answer('Rafflésie');
$answerQuestion2 = new Answer('Hydnora africana');
