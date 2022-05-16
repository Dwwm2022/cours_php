<?php

class Animal{
    private $couleur;
    private $poids;

    //setter mutateur
    public function setCouleur(string $couleur):void{
        $this->couleur = $couleur;
    }
    //getter accesseur
    public function getCouleur():string{
        return $this->couleur;
    }

    public function setPoids(string $poids):void{
        $this->poids = $poids;
    }
    public function getPoids():float{
        return $this->poids;
    }
}