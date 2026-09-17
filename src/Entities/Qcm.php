<?php
class Qcm
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private ?array $questions,
        private string $theme,
        private string $logo
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getQuestions(): ?array
    {
        return $this->questions;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function setQuestions(array $questions): self
    {
        $this->questions = $questions;
        return $this;
    }

    /**
     * Cette méthode permet d'obtenir le nombre de questions d'un QCM.
     */
    public function compteQuestions(): int
    {
        return count($this->questions);
    }
}
