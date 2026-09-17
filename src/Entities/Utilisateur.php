<?php
class Utilisateur
{
    public function __construct(
        private int $id,
        private string $name,
        private string $email,
        private string $mdp
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }
}