<?php
class Employe2{
    private string $nom = "";
    private string $prenom = "";
    private string $poste = "";
    private bool $isCadre = false;
    private Adresse $adresse;
    private string $secret = "";


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
     * Get the value of poste
     */ 
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set the value of poste
     *
     * @return  self
     */ 
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get the value of isCadre
     */ 
    public function getIsCadre()
    {
        return $this->isCadre;
    }

    /**
     * Set the value of isCadre
     *
     * @return  self
     */ 
    public function setIsCadre($isCadre)
    {
        $this->isCadre = $isCadre;

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
    public function setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Set the value of secret
     *
     * @return  self
     */ 
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }
}