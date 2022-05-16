<?php
class Employe{
    private string $nom;
    private string $prenom;
    private string $poste;
    private bool $isCadre;
    private string $adresse;
    private string $secret;


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}