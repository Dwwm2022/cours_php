<?php

class Formateur extends Personne{

    private bool $statut = false;

    public function __construct($i, $n, $p, $a, $s){
        parent::__construct($i, $n, $p, $a);
        $this->statut = $s;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    public function former(Personne $pers){
        echo "Il forme le formateur ".$pers->nom;
    }
}