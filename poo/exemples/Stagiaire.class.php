<?php

class Stagiaire extends Personne{

    private int $duree = 0;
    private bool $remuneration = false;

    public function __construct($d, $r){
        //parent::__construct($i,$n,$p,$a);
        $this->duree = $d;
        $this->remuneration = $r;
    }


    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of remuneration
     */ 
    public function getRemuneration()
    {
        return $this->remuneration;
    }

    /**
     * Set the value of remuneration
     *
     * @return  self
     */ 
    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function inscrire(){
        return "Je m'inscris à la formation";
    }

    public function etudier(){
        return "J' étudie pour réussir la formation";
    }
    public function affichage(){
        return parent::affichage()." Durée: ".$this->duree." mois Rémunération: ".($this->remuneration ?'Rémunéré':'Non Rémunéré');
    }

}