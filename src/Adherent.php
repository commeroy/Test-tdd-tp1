<?php

declare(strict_types=1);

final class Adherent
{
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance)
    {
        $this->nom = strtolower($nom);
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }
}