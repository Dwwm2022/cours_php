<?php

class Personne{
    
    protected string $identifiant = "";
    protected string $nom = "toto";
    protected string $prenom ="";
    protected string $adresse ="";

    public function __construct($i, $n, $p, $a){
        $this->identifiant = $i;
        $this->nom = $n;
        $this->prenom = $p;
        $this->adresse = $a; 
    }

    /**
     * Get the value of identifiant
     */ 
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     *
     * @return  self
     */ 
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

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

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

<<<<<<< HEAD
    public function former( Personne $pers){
        var_dump($pers);
    }

    public function affichage(){
=======
    public function former(Personne $pers){
        echo "Je suis la personne qui forme: ".$pers->nom;
    }

   final public function affichage(){
>>>>>>> 80a66aa75681e26016b2ea40c3d0b96887fc1dbb
        return "Identifiant: ".$this->identifiant." Nom: ".$this->nom." Prénom: ".$this->prenom." Adresse ".$this->adresse."<br/>";
    }
}