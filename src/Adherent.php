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
        $idNormalise = strtolower($this->prenom." ".$this->nom." ".$this->dateNaissance);
        if(strpos($idNormalise, '-') !== false) {
            $idNormalise = str_replace('-', ' ', $idNormalise);
        }
        return $idNormalise;
    }
}