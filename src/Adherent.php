<?php

declare(strict_types=1);

final class Adherent
{
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function idNormalise(){
        return strtolower($this->prenom." ".$this->nom." ".$this->dateNaissance);
    }
}