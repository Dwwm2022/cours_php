<?php 

class Animal{

    private float $poids = 0.0;
    private string $couleur = "";

    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @return  self
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function manger_animal(Animal $animal){
        $this->poids = $this->poids + $animal->poids;
        $animal->poids = 0.0;
        $animal->couleur = "";
    }
}